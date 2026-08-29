const menuBtn=document.querySelector('.menu-btn'); const nav=document.querySelector('.nav');
if(menuBtn&&nav){menuBtn.addEventListener('click',()=>{const open=nav.classList.toggle('open');document.body.classList.toggle('menu-open',open);menuBtn.setAttribute('aria-expanded',String(open));menuBtn.textContent=open?'×':'☰'});nav.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{nav.classList.remove('open');document.body.classList.remove('menu-open');menuBtn.textContent='☰'}))}
const form=document.querySelector('[data-demo-form]'); if(form){form.addEventListener('submit',e=>{e.preventDefault();form.querySelector('.success')?.classList.add('show')})}
document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());
