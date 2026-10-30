
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Adventure Zone | Mirza</title>
<style>
*{box-sizing:border-box}
body{margin:0;background:#07101c;color:white;font-family:Arial,sans-serif}
button{cursor:pointer;border:0;border-radius:10px;padding:12px 16px;font-weight:bold}
button:hover{filter:brightness(1.13)}
.hidden{display:none!important}
#menu{min-height:100vh;display:grid;place-items:center;padding:30px 16px;background:radial-gradient(ellipse at top,#1a3653,#07101c 70%)}
.wrap{width:min(950px,100%);text-align:center}
.eyebrow{color:#66e3ff;letter-spacing:5px;font-size:12px}
h1{font-size:clamp(35px,7vw,64px);margin:18px 0}
.subtitle{color:#b4c7d9;line-height:1.8}
.games{display:grid;grid-template-columns:repeat(3,minmax(0,1fr));gap:22px;margin-top:35px;text-align:left}
.card{background:#101d30;border:1px solid #354d68;border-radius:20px;overflow:hidden;transition:.2s}
.card:hover{transform:translateY(-5px);border-color:#58ddff}
.art{height:180px;display:grid;place-items:center;font-size:75px}
.space-art{background:radial-gradient(circle,#174778,#081020)}
.plant-art{background:radial-gradient(circle,#477b37,#10231c)}
.platform-art{background:radial-gradient(circle at 50% 35%,#6bdcff,#234c86 55%,#10172e)}
.info{padding:22px}
.info h2{margin:0 0 12px}
.info p{color:#b4c7d9;line-height:1.7;min-height:48px}
.space-btn{background:#49dfff;color:#06121e;width:100%}
.plant-btn{background:#b5f277;color:#17250c;width:100%}
.platform-btn{background:#ffd166;color:#302006;width:100%}
#game{height:100dvh;min-height:450px;position:relative;overflow:hidden;background:#07101c}
#game canvas{position:absolute;inset:0;width:100%;height:100%;display:block;touch-action:none}
.hud{position:absolute;top:12px;left:12px;right:12px;z-index:2;display:flex;gap:8px;justify-content:space-between;pointer-events:none}
.stat{background:#071426e8;border:1px solid #5adfff70;padding:9px 13px;border-radius:10px;font-size:11px}
.stat b{display:block;font-size:20px;margin-top:4px}
#help{position:absolute;z-index:2;bottom:14px;left:95px;right:8px;text-align:center;font-size:11px;color:#efffe6;pointer-events:none}
#back{position:absolute;z-index:4;bottom:12px;left:12px;background:#172b42;color:white;border:1px solid #54718e}
#mobile{position:absolute;z-index:3;bottom:55px;right:12px;display:grid;grid-template-columns:repeat(3,45px);gap:4px}
#mobile button{padding:12px 0;background:#18304bdd;color:white;border:1px solid #6588a8;touch-action:none}
#mobile .fire{background:#176b81}
#end{position:absolute;inset:0;z-index:5;display:grid;place-items:center;background:#020711d9;padding:20px}
.dialog{width:min(380px,100%);background:#0f1d31;border:1px solid #55dfff88;border-radius:20px;padding:26px;text-align:center}
.dialog p{color:#b8c9dc;line-height:1.7}
.primary{background:#4bdfff;color:#06121e}
@media(max-width:600px){
 .games{grid-template-columns:1fr}
 .art{height:120px}
 .info p{min-height:0}
 .stat{padding:7px 9px}
 .stat b{font-size:16px}
 #help{max-width:60%;left:auto;right:8px;bottom:18px;line-height:1.5}
}
</style>
</head>
<body>

<section id="menu">
 <div class="wrap">
  <div class="eyebrow">MIRZA'S PERSONAL GAME ZONE</div>
  <h1>ADVENTURE <span style="color:#54dfff">ZONE</span></h1>
  <p class="subtitle">Three worlds. Three challenges. One player.<br>Choose your game and start the adventure.</p>
  <div class="games">
   <article class="card">
    <div class="art space-art">🚀</div>
    <div class="info">
     <h2>Space Fighter 3D</h2>
     <p>Terbang di luar angkasa, tembak pesawat musuh, dan bertahan hidup.</p>
     <button class="space-btn" onclick="startGame('space')">PLAY SPACE FIGHTER →</button>
    </div>
   </article>
   <article class="card">
    <div class="art plant-art">🌻</div>
    <div class="info">
     <h2>Plant Defense</h2>
     <p>Tanam tanaman, kumpulkan matahari, dan lindungi rumah dari zombie.</p>
     <button class="plant-btn" onclick="startGame('plant')">PLAY PLANT DEFENSE →</button>
    </div>
   </article>
    <article class="card">
     <div class="art platform-art">🍄</div>
     <div class="info">
      <h2>3D Platformer</h2>
      <p>Lompat antarplatform, kumpulkan koin, dan hindari monster di dunia 3D.</p>
      <button class="platform-btn" onclick="startGame('platform')">PLAY PLATFORMER →</button>
     </div>
    </article>
   </div>
  <p class="subtitle" style="font-size:11px;margin-top:28px">MADE FOR MIRZA · ADVENTURE COLLECTION</p>
 </div>
</section>

<section id="game" class="hidden">
 <div class="hud">
  <div class="stat"><span id="scoreLabel">SCORE</span><b id="score">0</b></div>
  <div class="stat"><span id="healthLabel">HEALTH</span><b><span id="health">100</span>%</b></div>
  <div class="stat"><span id="killLabel">KILLS</span><b id="kills">0</b></div>
 </div>
 <div id="help"></div>
 <div id="mobile">
  <span></span><button data-key="up">▲</button><span></span>
  <button data-key="left">◀</button><button data-key="down">▼</button><button data-key="right">▶</button>
  <span></span><button class="fire" data-key="fire">FIRE</button><span></span>
 </div>
 <button id="back" onclick="goMenu()">← MENU</button>
 <div id="end" class="hidden">
  <div class="dialog">
   <div id="endIcon" style="font-size:45px">💥</div>
   <h2 id="endTitle">GAME OVER</h2>
   <p id="endText"></p>
   <button class="primary" onclick="restartGame()">PLAY AGAIN</button>
   <button onclick="goMenu()" style="background:#24364d;color:white;margin-top:8px">GAME MENU</button>
  </div>
 </div>
</section>

<script type="module">
import * as THREE from 'https://cdn.jsdelivr.net/npm/three@0.160.0/build/three.module.js';

const $=id=>document.getElementById(id);
const menu=$('menu'),game=$('game'),end=$('end');
let mode='',active=false,score=0,kills=0,hp=100,elapsed=0,last=0,raf=0,keys={};
let space=null,plant=null,platform=null;
const rand=(a,b)=>a+Math.random()*(b-a);

addEventListener('keydown',e=>{
 keys[e.code]=true;
 if(['Space','ArrowUp','ArrowDown','ArrowLeft','ArrowRight'].includes(e.code))e.preventDefault();
});
addEventListener('keyup',e=>keys[e.code]=false);
document.querySelectorAll('[data-key]').forEach(b=>{
 const key={up:'ArrowUp',down:'ArrowDown',left:'ArrowLeft',right:'ArrowRight',fire:'Space'}[b.dataset.key];
 b.addEventListener('pointerdown',e=>{e.preventDefault();keys[key]=true});
 ['pointerup','pointerleave','pointercancel'].forEach(ev=>b.addEventListener(ev,()=>keys[key]=false));
});

function hud(){
 $('score').textContent=score;
 $('health').textContent=hp;
 $('kills').textContent=kills;
}
function damage(n){
 hp=Math.max(0,hp-n);hud();
 if(hp===0)finish();
}
function finish(){
 if(!active)return;
 active=false;
 $('endTitle').textContent='GAME OVER';
 $('endIcon').textContent=mode==='plant'?'🧟':'💥';
 $('endText').textContent=`Final score: ${score} · Defeated: ${kills}`;
 end.classList.remove('hidden');
}
function startGame(which){
 mode=which;menu.classList.add('hidden');game.classList.remove('hidden');end.classList.add('hidden');
 score=0;kills=0;hp=100;elapsed=0;hud();keys={};
 $('scoreLabel').textContent='SCORE';
 $('healthLabel').textContent=which==='plant'?'HOME HEALTH':which==='platform'?'PLAYER HEALTH':'SHIP HEALTH';
 $('killLabel').textContent=which==='plant'?'ZOMBIES':which==='platform'?'MONSTERS':'KILLS';
 $('mobile').style.display=(which==='space'||which==='platform')?'grid':'none';
 $('help').textContent=which==='space'?'WASD / ARROWS: MOVE · SPACE: SHOOT · SHIFT: BOOST':which==='platform'?'← →: MOVE · SPACE / ▲: JUMP · COLLECT COINS':'CLICK PLANTS TO SELECT · CLICK GRASS TO PLANT · COLLECT SUN';
 if(which==='space'){
  if(plant)plant.hide();
  if(!space)space=makeSpace();
  space.show();space.reset();
 }else if(which==='plant'){
  if(space)space.hide();if(platform)platform.hide();
  if(!plant)plant=makePlantGame();
  plant.show();plant.reset();
 }else{
  if(space)space.hide();if(plant)plant.hide();
  if(!platform)platform=makePlatformer();
  platform.show();platform.reset();
 }
 active=true;last=performance.now();cancelAnimationFrame(raf);raf=requestAnimationFrame(loop);
}
window.startGame=startGame;
window.restartGame=()=>startGame(mode);
window.goMenu=()=>{
 active=false;cancelAnimationFrame(raf);keys={};
 if(space)space.hide();if(plant)plant.hide();if(platform)platform.hide();
 end.classList.add('hidden');game.classList.add('hidden');menu.classList.remove('hidden');
};
function loop(now){
 if(!active)return;
 const dt=Math.min((now-last)/1000,.035);last=now;elapsed+=dt;
 if(mode==='space')space.update(dt);else if(mode==='plant')plant.update(dt);else platform.update(dt);
 if(active)raf=requestAnimationFrame(loop);
}

/* SPACE FIGHTER */
function makeSpace(){
 const scene=new THREE.Scene();
 scene.background=new THREE.Color(0x030611);
 scene.fog=new THREE.Fog(0x030611,40,110);
 const camera=new THREE.PerspectiveCamera(65,innerWidth/innerHeight,.1,200);
 camera.position.set(0,8,14);
 const renderer=new THREE.WebGLRenderer({antialias:true});
 renderer.setPixelRatio(Math.min(devicePixelRatio,2));
 renderer.setSize(innerWidth,innerHeight);
 renderer.domElement.style.zIndex='0';game.prepend(renderer.domElement);
 scene.add(new THREE.HemisphereLight(0x9bcaff,0x101020,2));
 const light=new THREE.PointLight(0x21cfff,35,60);light.position.set(0,10,4);scene.add(light);
 const positions=[];
 for(let i=0;i<1000;i++)positions.push(rand(-90,90),rand(-15,40),rand(-120,20));
 const sg=new THREE.BufferGeometry();sg.setAttribute('position',new THREE.Float32BufferAttribute(positions,3));
 scene.add(new THREE.Points(sg,new THREE.PointsMaterial({color:0x9edcff,size:.14})));
 const playerMat=new THREE.MeshStandardMaterial({color:0x18d8ff,emissive:0x0066bb,emissiveIntensity:1.2});
 const enemyMat=new THREE.MeshStandardMaterial({color:0xff315b,emissive:0x8c001f,emissiveIntensity:1.4});
 const darkMat=new THREE.MeshStandardMaterial({color:0x243b57});
 function ship(enemy=false){
  const g=new THREE.Group(),mat=enemy?enemyMat:playerMat;
  const body=new THREE.Mesh(new THREE.ConeGeometry(.55,1.8,4),mat);
  body.rotation.x=enemy?-Math.PI/2:Math.PI/2;g.add(body);
  const wings=new THREE.Mesh(new THREE.BoxGeometry(2.4,.12,.7),mat);wings.position.z=.2;g.add(wings);
  const cockpit=new THREE.Mesh(new THREE.SphereGeometry(.24,10,8),new THREE.MeshBasicMaterial({color:0x9ffaff}));cockpit.position.z=-.2;g.add(cockpit);
  const wing2=new THREE.Mesh(new THREE.BoxGeometry(.15,.25,.8),darkMat);wing2.position.y=.1;g.add(wing2);
  if(enemy)g.rotation.y=Math.PI;
  return g;
 }
 const player=ship();player.position.set(0,0,5);scene.add(player);
 let enemies=[],shots=[],enemyShots=[],particles=[],shotTimer=0,spawn=0;
 function laser(x,z,bad=false){
  const o=new THREE.Mesh(new THREE.BoxGeometry(.1,.1,1.2),new THREE.MeshBasicMaterial({color:bad?0xff315b:0x49faff}));
  o.position.set(x,0,z);scene.add(o);(bad?enemyShots:shots).push(o);
 }
 function clear(a){a.forEach(o=>scene.remove(o));a.length=0}
 function reset(){clear(enemies);clear(shots);clear(enemyShots);clear(particles);player.position.set(0,0,5);shotTimer=0;spawn=0}
 function update(dt){
  const spd=(keys.ShiftLeft||keys.ShiftRight?13:8)*dt;
  if(keys.KeyA||keys.ArrowLeft)player.position.x-=spd;
  if(keys.KeyD||keys.ArrowRight)player.position.x+=spd;
  if(keys.KeyW||keys.ArrowUp)player.position.z-=spd;
  if(keys.KeyS||keys.ArrowDown)player.position.z+=spd;
  player.position.x=THREE.MathUtils.clamp(player.position.x,-9,9);
  player.position.z=THREE.MathUtils.clamp(player.position.z,-4,9);
  shotTimer-=dt;spawn+=dt;
  if(keys.Space&&shotTimer<=0){laser(player.position.x,player.position.z-1);shotTimer=.18}
  if(spawn>Math.max(.4,1.2-kills*.012)){
   const e=ship(true);e.position.set(rand(-8,8),0,-38);e.userData.speed=rand(8,12);e.userData.fire=rand(2,4);scene.add(e);enemies.push(e);spawn=0;
  }
  for(let i=shots.length-1;i>=0;i--){shots[i].position.z-=32*dt;if(shots[i].position.z<-48){scene.remove(shots[i]);shots.splice(i,1)}}
  for(let i=enemies.length-1;i>=0;i--){
   const e=enemies[i];e.position.z+=e.userData.speed*dt;e.position.x+=Math.sin(elapsed*2+i)*dt;
   e.userData.fire-=dt;
   if(e.userData.fire<=0&&e.position.z<0){laser(e.position.x,e.position.z+1,true);e.userData.fire=rand(2,3.5)}
   let dead=false;
   for(let j=shots.length-1;j>=0;j--)if(shots[j].position.distanceTo(e.position)<1.5){
    scene.remove(shots[j]);shots.splice(j,1);scene.remove(e);enemies.splice(i,1);score+=100;kills++;hud();dead=true;break;
   }
   if(dead)continue;
   if(e.position.distanceTo(player.position)<1.4||e.position.z>11){scene.remove(e);enemies.splice(i,1);damage(12)}
  }
  for(let i=enemyShots.length-1;i>=0;i--){
   const l=enemyShots[i];l.position.z+=20*dt;
   if(l.position.distanceTo(player.position)<1){scene.remove(l);enemyShots.splice(i,1);damage(8)}
   else if(l.position.z>15){scene.remove(l);enemyShots.splice(i,1)}
  }
  camera.position.x=THREE.MathUtils.lerp(camera.position.x,player.position.x*.18,.04);
  camera.lookAt(0,0,-10);renderer.render(scene,camera);
 }
 function resize(){camera.aspect=innerWidth/innerHeight;camera.updateProjectionMatrix();renderer.setSize(innerWidth,innerHeight)}
 addEventListener('resize',resize);
 return {reset,update,hide(){renderer.domElement.style.display='none'},show(){renderer.domElement.style.display='block'}};
}


/* 3D PLATFORMER */
function makePlatformer(){
 const scene=new THREE.Scene();scene.background=new THREE.Color(0x8bdcff);scene.fog=new THREE.Fog(0x8bdcff,35,100);
 const camera=new THREE.PerspectiveCamera(60,innerWidth/innerHeight,.1,180);
 camera.position.set(0,8,17);
 const renderer=new THREE.WebGLRenderer({antialias:true});renderer.setPixelRatio(Math.min(devicePixelRatio,2));renderer.setSize(innerWidth,innerHeight);renderer.domElement.style.zIndex='0';game.prepend(renderer.domElement);
 scene.add(new THREE.HemisphereLight(0xdff7ff,0x4d6237,2.1));const sunLight=new THREE.DirectionalLight(0xffffff,2.2);sunLight.position.set(-5,12,8);scene.add(sunLight);
 const mat=(color,emissive=0)=>new THREE.MeshStandardMaterial({color,emissive,roughness:.7});
 const grass=mat(0x55c65a),dirt=mat(0x8a5a35),gold=mat(0xffd43b,0x9b6500),enemyMat=mat(0xff5577),playerMat=mat(0x24b8ff),white=mat(0xffffff),dark=mat(0x23344b);
 const platforms=[],coins=[],monsters=[];
 const player=new THREE.Group();const body=new THREE.Mesh(new THREE.BoxGeometry(.85,1.1,.65),playerMat);body.position.y=.65;player.add(body);
 const head=new THREE.Mesh(new THREE.SphereGeometry(.42,16,12),mat(0xffc99c));head.position.y=1.45;player.add(head);
 const cap=new THREE.Mesh(new THREE.CylinderGeometry(.43,.48,.18,16),mat(0xe94343));cap.position.y=1.78;player.add(cap);
 const eye1=new THREE.Mesh(new THREE.SphereGeometry(.055,8,8),dark),eye2=eye1.clone();eye1.position.set(-.13,1.48,.37);eye2.position.set(.13,1.48,.37);player.add(eye1,eye2);scene.add(player);
 function platformAt(x,y,z,len=5){const g=new THREE.Group();const top=new THREE.Mesh(new THREE.BoxGeometry(len,.35,4),grass);top.position.y=y;g.add(top);const base=new THREE.Mesh(new THREE.BoxGeometry(len,.8,4),dirt);base.position.y=y-.5;g.add(base);g.position.set(x,0,z);scene.add(g);platforms.push({x,y,z,len,mesh:g});}
 function makeCoin(x,y,z){const o=new THREE.Mesh(new THREE.TorusGeometry(.32,.1,8,18),gold);o.position.set(x,y,z);scene.add(o);coins.push(o)}
 function makeMonster(x,y,z){const o=new THREE.Group();const b=new THREE.Mesh(new THREE.SphereGeometry(.48,12,10),enemyMat);b.position.y=.45;o.add(b);const e1=new THREE.Mesh(new THREE.SphereGeometry(.07,8,8),white),e2=e1.clone();e1.position.set(-.16,.55,.38);e2.position.set(.16,.55,.38);o.add(e1,e2);o.position.set(x,y,z);scene.add(o);monsters.push({mesh:o,dir:1,baseX:x,hp:1});}
 function build(){platformAt(0,0,0,8);platformAt(7,1.3,-1,4);platformAt(13,2.4,0,4);platformAt(19,1.2,-1,5);platformAt(26,2.1,0,4);platformAt(33,.8,0,6);platformAt(41,1.8,-1,5);platformAt(49,0,0,8);
  [[-1,1.5,0],[7,2.8,-1],[13,3.9,0],[19,2.7,-1],[26,3.6,0],[33,2.3,0],[41,3.3,-1],[49,1.5,0]].forEach(a=>{for(let i=0;i<3;i++)makeCoin(a[0]+(i-1)*.65,a[1]+.25,a[2])});
  makeMonster(12,2.4,0);makeMonster(29,2.1,0);makeMonster(43,1.8,-1);
 }
 let vy=0,onGround=false,worldX=0,worldZ=0,invuln=0;
 function reset(){platforms.forEach(p=>scene.remove(p.mesh));platforms.length=0;coins.forEach(o=>scene.remove(o));coins.length=0;monsters.forEach(m=>scene.remove(m.mesh));monsters.length=0;worldX=0;worldZ=0;vy=0;onGround=false;invuln=0;player.position.set(0,.2,0);build();}
 function update(dt){invuln=Math.max(0,invuln-dt);let move=0;if(keys.ArrowLeft||keys.KeyA)move-=1;if(keys.ArrowRight||keys.KeyD)move+=1;worldX+=move*8*dt;worldZ=0;
  if((keys.Space||keys.ArrowUp||keys.KeyW)&&onGround){vy=9.5;onGround=false}
  vy-=22*dt;const oldY=player.position.y;player.position.x=worldX;player.position.y+=vy*dt;onGround=false;
  for(const p of platforms){if(worldX>p.x-p.len/2-.3&&worldX<p.x+p.len/2+.3&&Math.abs(player.position.z-p.z)<2.1&&vy<=0&&oldY>=p.y+.15&&player.position.y<=p.y+.2){player.position.y=p.y+.18;vy=0;onGround=true}}
  if(player.position.y< -5){damage(25);player.position.y=2;vy=5;worldX=Math.max(0,worldX-2)}
  player.rotation.z=-move*.12;
  for(let i=coins.length-1;i>=0;i--){const c=coins[i];c.rotation.y+=dt*3;if(c.position.distanceTo(new THREE.Vector3(worldX,player.position.y+1,0))<1.05){scene.remove(c);coins.splice(i,1);score+=50;hud()}}
  for(const m of monsters){m.mesh.position.x=m.baseX+Math.sin(elapsed*1.8+m.baseX)*1.3;m.mesh.rotation.y=Math.sin(elapsed*2)*.15;if(invuln<=0&&Math.abs(m.mesh.position.x-worldX)<.9&&Math.abs(m.mesh.position.y-player.position.y)<1.5){damage(15);invuln=1.2;vy=4}}
  camera.position.x+=(worldX-camera.position.x)*Math.min(1,dt*4);camera.position.y+=(player.position.y+7-camera.position.y)*Math.min(1,dt*2);camera.lookAt(worldX+2,player.position.y+1,0);
  if(worldX>53){active=false;end.classList.remove('hidden');$('endIcon').textContent='🏆';$('endTitle').textContent='LEVEL COMPLETE!';$('endText').textContent=`Keren! Koin terkumpul dan skor kamu ${score}.`;}
  renderer.render(scene,camera);
 }
 function resize(){camera.aspect=innerWidth/innerHeight;camera.updateProjectionMatrix();renderer.setSize(innerWidth,innerHeight)}addEventListener('resize',resize);
 return {reset,update,hide(){renderer.domElement.style.display='none'},show(){renderer.domElement.style.display='block'}};
}

/* PLANT DEFENSE */
function makePlantGame(){
 const canvas=document.createElement('canvas');
 canvas.style.zIndex='0';game.prepend(canvas);
 const ctx=canvas.getContext('2d');
 let w=0,h=0,cellW=0,cellH=0,top=0,bottom=0;
 let plants=[],zombies=[],peas=[],suns=[],sun=150,spawn=0,selected='pea';
 const lanes=5,cols=9;
 const cards=[{id:'sun',cost:50,emoji:'🌻'},{id:'pea',cost:100,emoji:'🌱'}];
 function resize(){
  const d=Math.min(devicePixelRatio||1,2);w=innerWidth;h=innerHeight;
  canvas.width=w*d;canvas.height=h*d;ctx.setTransform(d,0,0,d,0,0);
  top=Math.max(125,h*.22);bottom=h-25;cellW=w/cols;cellH=(bottom-top)/lanes;
 }
 addEventListener('resize',resize);resize();
 function text(t,x,y,size,color='#fff',align='center'){
  ctx.font=`bold ${size}px Arial`;ctx.textAlign=align;ctx.fillStyle=color;ctx.fillText(t,x,y);
 }
 function round(x,y,ww,hh,r,color){
  ctx.fillStyle=color;ctx.beginPath();ctx.roundRect(x,y,ww,hh,r);ctx.fill();
 }
 function reset(){plants=[];zombies=[];peas=[];suns=[];sun=150;spawn=2;selected='pea';canvas.style.display='block';for(let i=0;i<3;i++)dropSun(true)}
 function dropSun(initial=false){
  suns.push({x:rand(35,w-35),y:initial?rand(top,bottom):top+5,targetY:rand(top,bottom),life:12,value:25});
 }
 function addPlant(type,lane,col){
  if(plants.some(p=>p.lane===lane&&p.col===col))return;
  const cost=type==='sun'?50:100;if(sun<cost)return;
  sun-=cost;plants.push({type,lane,col,x:(col+.5)*cellW,y:top+(lane+.5)*cellH,timer:type==='sun'?5:1,hp:100});
 }
 function addZombie(){
  const lane=Math.floor(Math.random()*lanes);
  zombies.push({x:w+30,y:top+(lane+.5)*cellH,lane,hp:100,speed:rand(10,16)+Math.min(kills*.1,6),attack:0,type:Math.random()<.2?'cone':'normal'});
 }
 function background(){
  const g=ctx.createLinearGradient(0,0,0,h);g.addColorStop(0,'#193a29');g.addColorStop(1,'#10241a');
  ctx.fillStyle=g;ctx.fillRect(0,0,w,h);
  round(8,8,w-16,84,12,'#15251feF');
  text('🌻 PLANT DEFENSE',18,34,17,'#c6ff9a','left');
  text('☀ '+sun,18,65,18,'#ffdc5a','left');
  cards.forEach((c,i)=>{
   const x=Math.min(w-108,Math.max(120,140+i*112));
   round(x,16,100,62,9,selected===c.id?'#4b7540':'#2c4033');
   ctx.strokeStyle=selected===c.id?'#caff83':'#72866a';ctx.strokeRect(x,16,100,62);
   text(c.emoji,x+24,43,24);text(c.cost+' ☀',x+65,57,12,'#ffe48a');
  });
  round(5,top-10,w-10,bottom-top+20,8,'#417e38');
  for(let r=0;r<lanes;r++)for(let c=0;c<cols;c++){
   ctx.fillStyle=(r+c)%2?'#68b94d':'#79ca5c';
   ctx.fillRect(c*cellW+1,top+r*cellH+1,cellW-2,cellH-2);
   ctx.strokeStyle='#ffffff18';ctx.strokeRect(c*cellW,top+r*cellH,cellW,cellH);
  }
  text('🏠',22,top-14,26);
 }
 function drawPlant(p){
  ctx.save();ctx.translate(p.x,p.y);
  if(p.type==='sun'){
   for(let i=0;i<12;i++){
    const a=i*Math.PI/6;ctx.fillStyle='#ffce42';
    ctx.beginPath();ctx.ellipse(Math.cos(a)*13,Math.sin(a)*13,7,10,a,0,7);ctx.fill();
   }
   ctx.fillStyle='#885024';ctx.beginPath();ctx.arc(0,0,14,0,7);ctx.fill();
   ctx.fillStyle='#fff2bd';ctx.beginPath();ctx.arc(-5,-3,3,0,7);ctx.arc(5,-3,3,0,7);ctx.fill();
   ctx.strokeStyle='#56351d';ctx.lineWidth=2;ctx.beginPath();ctx.arc(0,3,5,.2,2.8);ctx.stroke();
  }else{
   ctx.strokeStyle='#267b38';ctx.lineWidth=5;ctx.beginPath();ctx.moveTo(0,15);ctx.lineTo(0,28);ctx.stroke();
   ctx.fillStyle='#45a844';ctx.beginPath();ctx.ellipse(-9,20,12,5,-.5,0,7);ctx.ellipse(11,22,11,5,.5,0,7);ctx.fill();
   ctx.fillStyle='#63dd4b';ctx.beginPath();ctx.arc(0,-3,19,0,7);ctx.fill();
   ctx.fillStyle='#277e32';ctx.beginPath();ctx.arc(13,-5,10,0,7);ctx.fill();
   ctx.fillStyle='#103f20';ctx.beginPath();ctx.arc(13,-5,5,0,7);ctx.fill();
  }
  ctx.restore();
 }
 function drawZombie(z){
  ctx.save();ctx.translate(z.x,z.y);
  ctx.fillStyle='#263d2255';ctx.beginPath();ctx.ellipse(0,23,20,6,0,0,7);ctx.fill();
  ctx.strokeStyle='#6b8053';ctx.lineWidth=8;ctx.beginPath();ctx.moveTo(-6,12);ctx.lineTo(-10,23);ctx.moveTo(6,12);ctx.lineTo(10,23);ctx.stroke();
  round(-15,-8,30,26,6,'#627d4c');
  ctx.fillStyle='#91a96c';ctx.beginPath();ctx.ellipse(0,-17,15,18,0,0,7);ctx.fill();
  if(z.type==='cone'){ctx.fillStyle='#e89135';ctx.beginPath();ctx.moveTo(-13,-27);ctx.lineTo(0,-48);ctx.lineTo(13,-27);ctx.fill()}
  ctx.fillStyle='#fff3cc';ctx.beginPath();ctx.arc(-5,-19,4,0,7);ctx.arc(6,-19,4,0,7);ctx.fill();
  ctx.fillStyle='#30241b';ctx.beginPath();ctx.arc(-4,-19,1.5,0,7);ctx.arc(7,-19,1.5,0,7);ctx.fill();
  ctx.fillStyle='#402d22';ctx.fillRect(-5,-8,11,4);
  ctx.strokeStyle='#91a96c';ctx.lineWidth=6;ctx.beginPath();ctx.moveTo(-11,-3);ctx.lineTo(-22,2);ctx.moveTo(11,-3);ctx.lineTo(22,0);ctx.stroke();
  round(-17,-49,34,4,2,'#542d27');round(-17,-49,34*Math.max(0,z.hp/100),4,2,'#ff6558');
  ctx.restore();
 }
 function update(dt){
  background();
  for(const s of suns){s.y+=(s.targetY-s.y)*Math.min(1,dt);s.life-=dt;
   ctx.save();ctx.shadowColor='#ffe45b';ctx.shadowBlur=15;ctx.fillStyle='#ffdb48';ctx.beginPath();ctx.arc(s.x,s.y,14,0,7);ctx.fill();ctx.shadowBlur=0;ctx.fillStyle='#fff4a1';ctx.beginPath();ctx.arc(s.x-4,s.y-4,4,0,7);ctx.fill();ctx.restore();
  }
  suns=suns.filter(s=>s.life>0);
  for(const p of plants){
   p.timer-=dt;
   if(p.type==='sun'&&p.timer<=0){suns.push({x:p.x+rand(-10,10),y:p.y-15,targetY:p.y+10,life:12,value:25});p.timer=7}
   if(p.type==='pea'&&p.timer<=0&&zombies.some(z=>z.lane===p.lane&&z.x>p.x)){peas.push({x:p.x+20,y:p.y-2,lane:p.lane});p.timer=1.2}
   drawPlant(p);
  }
  for(let i=peas.length-1;i>=0;i--){
   const b=peas[i];b.x+=270*dt;
   ctx.fillStyle='#aaff5a';ctx.beginPath();ctx.arc(b.x,b.y,7,0,7);ctx.fill();
   let hit=false;
   for(const z of zombies)if(z.lane===b.lane&&Math.abs(z.x-b.x)<18){z.hp-=35;hit=true;break}
   if(hit||b.x>w)peas.splice(i,1);
  }
  spawn+=dt;if(spawn>Math.max(1.4,4.5-kills*.035)){addZombie();spawn=0}
  for(let i=zombies.length-1;i>=0;i--){
   const z=zombies[i],p=plants.find(p=>p.lane===z.lane&&Math.abs(z.x-p.x)<24);
   if(p){z.attack+=dt;if(z.attack>.7){p.hp-=15;z.attack=0}if(p.hp<=0)plants.splice(plants.indexOf(p),1)}
   else z.x-=z.speed*dt;
   if(z.hp<=0){zombies.splice(i,1);score+=100;kills++;hud();if(Math.random()<.35)suns.push({x:z.x,y:z.y,targetY:z.y+20,life:10,value:25});continue}
   if(z.x<10){zombies.splice(i,1);damage(20);continue}
   drawZombie(z);
  }
  text('SELECT PLANT · CLICK GRASS TO PLANT · COLLECT SUN',w/2,h-7,Math.min(11,w/38),'#f5ffe8');
 }
 canvas.addEventListener('click',e=>{
  if(!active||mode!=='plant')return;
  const rect=canvas.getBoundingClientRect();
  const x=(e.clientX-rect.left)*w/rect.width,y=(e.clientY-rect.top)*h/rect.height;
  cards.forEach((c,i)=>{
   const cx=Math.min(w-108,Math.max(120,140+i*112));
   if(x>=cx&&x<=cx+100&&y>=16&&y<=78)selected=c.id;
  });
  for(let i=suns.length-1;i>=0;i--)if(Math.hypot(x-suns[i].x,y-suns[i].y)<24){sun+=suns[i].value;suns.splice(i,1);return}
  if(y>=top&&y<=bottom){addPlant(selected,Math.floor((y-top)/cellH),Math.floor(x/cellW))}
 });
 return {reset,update,hide(){canvas.style.display='none'},show(){canvas.style.display='block'}};
}
</script>
</body>
</html>
