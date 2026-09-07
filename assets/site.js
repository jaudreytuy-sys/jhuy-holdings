const menuBtn=document.querySelector('.menu-btn'); const nav=document.querySelector('.nav');
if(menuBtn&&nav){menuBtn.addEventListener('click',()=>{const open=nav.classList.toggle('open');document.body.classList.toggle('menu-open',open);menuBtn.setAttribute('aria-expanded',String(open));menuBtn.textContent=open?'×':'☰'});nav.querySelectorAll('a').forEach(a=>a.addEventListener('click',()=>{nav.classList.remove('open');document.body.classList.remove('menu-open');menuBtn.textContent='☰';menuBtn.setAttribute('aria-expanded','false')}))}
document.querySelectorAll('[data-year]').forEach(el=>el.textContent=new Date().getFullYear());

const inquiryForm=document.querySelector('[data-inquiry-form]');
if(inquiryForm){
  const params=new URLSearchParams(window.location.search);
  const type=params.get('type');
  const select=inquiryForm.querySelector('[name="inquiry_type"]');
  if(select && (type==='transport'||type==='fruit')) select.value=type;
  const status=inquiryForm.querySelector('[data-form-status]');
  const sent=params.get('sent');
  if(status && sent==='1'){
    status.textContent='Thank you. Your inquiry has been sent to the selected JHUY team.';
    status.classList.add('show','form-status-success');
  } else if(status && sent==='0'){
    status.textContent='Your message could not be sent. Please email the selected JHUY team directly using the contact details on this page.';
    status.classList.add('show','form-status-error');
  }
}
