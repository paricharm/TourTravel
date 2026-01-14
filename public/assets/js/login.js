document.addEventListener("DOMContentLoaded", () => {
    const canvas = document.getElementById("background-canvas");
    const ctx = canvas.getContext("2d");
  
    let width, height, centerX, centerY;
    let nodes = [];
    let packets = [];
    let mouse = { x: null, y: null, radius: 150 };
  
    const config = {
      nodeCount: 250, // More nodes for a denser network
      packetCount: 20, // Number of data packets
      fov: 350, // Field of view for 3D effect
      baseSpeed: 0.6, // Base speed of nodes moving forward
      packetSpeed: 1.5 // Base speed of data packets
    };
  
    class Node {
      constructor() {
        this.x = (Math.random() - 0.5) * 3000;
        this.y = (Math.random() - 0.5) * 3000;
        this.z = Math.random() * 3000;
        this.projected = {};
      }
  
      reset() {
        this.x = (Math.random() - 0.5) * 3000;
        this.y = (Math.random() - 0.5) * 3000;
        this.z = 3000;
      }
  
      project() {
        const scale = config.fov / (config.fov + this.z);
        this.projected.x = centerX + this.x * scale;
        this.projected.y = centerY + this.y * scale;
        this.projected.alpha = Math.max(0, 1 - this.z / 3000);
      }
  
      update() {
        this.z -= config.baseSpeed;
        if (this.z < 1) {
          this.reset();
        }
        this.project();
      }
    }
  
    class Packet {
      constructor() {
        this.reset();
      }
      reset() {
        const startNodeIndex = Math.floor(Math.random() * nodes.length);
        let endNodeIndex = Math.floor(Math.random() * nodes.length);
        while (startNodeIndex === endNodeIndex) {
          endNodeIndex = Math.floor(Math.random() * nodes.length);
        }
        this.from = nodes[startNodeIndex];
        this.to = nodes[endNodeIndex];
        this.progress = 0;
        this.speed = Math.random() * 0.5 + config.packetSpeed;
      }
      update() {
        this.progress += this.speed;
        if (this.progress >= 100) {
          this.reset();
        }
      }
      draw() {
        const p1 = this.from.projected;
        const p2 = this.to.projected;
        if (!p1.x || !p2.x) return;
        const currentX = p1.x + (p2.x - p1.x) * (this.progress / 100);
        const currentY = p1.y + (p2.y - p1.y) * (this.progress / 100);
        const alpha =
          Math.min(p1.alpha, p2.alpha) * (1 - Math.abs(50 - this.progress) / 50);
        if (alpha <= 0) return;
        ctx.beginPath();
        ctx.arc(currentX, currentY, 2, 0, Math.PI * 2);
        ctx.fillStyle = `rgba(255, 255, 255, ${alpha})`;
        ctx.shadowColor = "white";
        ctx.shadowBlur = 10;
        ctx.fill();
      }
    }
  
    function setup() {
      width = canvas.width = window.innerWidth;
      height = canvas.height = window.innerHeight;
      centerX = width / 2;
      centerY = height / 2;
      nodes = Array.from({ length: config.nodeCount }, () => new Node());
      packets = Array.from({ length: config.packetCount }, () => new Packet());
    }
  
    function drawNetwork() {
      ctx.beginPath();
      for (let i = 0; i < nodes.length; i++) {
        const p1 = nodes[i].projected;
        ctx.fillStyle = `rgba(56, 189, 248, ${p1.alpha * 0.7})`;
        ctx.fillRect(p1.x - 0.5, p1.y - 0.5, 1, 1);
        for (let j = i + 1; j < nodes.length; j++) {
          const p2 = nodes[j].projected;
          const dist = Math.hypot(p1.x - p2.x, p1.y - p2.y);
          if (dist < 120) {
            const alpha = Math.min(p1.alpha, p2.alpha) * (1 - dist / 120);
            ctx.strokeStyle = `rgba(56, 189, 248, ${alpha * 0.5})`;
            ctx.moveTo(p1.x, p1.y);
            ctx.lineTo(p2.x, p2.y);
          }
        }
      }
      ctx.shadowColor = `rgba(56, 189, 248, 0.5)`;
      ctx.shadowBlur = 5;
      ctx.stroke();
      ctx.shadowBlur = 0;
    }
  
    function drawMouseInteraction() {
      if (mouse.x === null) return;
      ctx.beginPath();
      for (const node of nodes) {
        const p = node.projected;
        const dist = Math.hypot(p.x - mouse.x, p.y - mouse.y);
        if (dist < mouse.radius) {
          const alpha = p.alpha * (1 - dist / mouse.radius);
          ctx.strokeStyle = `rgba(200, 220, 255, ${alpha * 0.8})`;
          ctx.moveTo(mouse.x, mouse.y);
          ctx.lineTo(p.x, p.y);
        }
      }
      ctx.shadowColor = "rgba(200, 220, 255, 0.8)";
      ctx.shadowBlur = 10;
      ctx.stroke();
      ctx.shadowBlur = 0;
    }
  
    function animate() {
      ctx.clearRect(0, 0, width, height);
      nodes.forEach((node) => node.update());
      packets.forEach((packet) => packet.update());
      drawNetwork();
      packets.forEach((packet) => packet.draw());
      drawMouseInteraction();
      requestAnimationFrame(animate);
    }
  
    window.addEventListener("resize", setup);
    window.addEventListener("mousemove", (e) => {
      mouse.x = e.clientX;
      mouse.y = e.clientY;
    });
    window.addEventListener("mouseout", () => {
      mouse.x = null;
      mouse.y = null;
    });
  
    setup();
    animate();
  
  });
  