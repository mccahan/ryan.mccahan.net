tippy('.tippy[data-tippy-content]', {
  offset: [0, 0]
});

tippy('.social *[data-tippy-content]', {
  offset: [0, 40]
});

var tl = gsap.timeline();
tl.fromTo('#hero .section-content', { scale: 0.9 }, { scale: 1, boxShadow: '0px 0px 17px 5px rgba(0, 0, 0, 0.1)', duration: 1 }, 0.2)
  .fromTo('#hero .section-content .underlay-gray', { opacity: 0 }, { opacity: 1, duration: 1 }, 1)
  .fromTo('#hero .section-content .underlay-blue', { opacity: 0, height: '90%', width: '75%' }, { opacity: 1, duration: 1, height: '120%', width: '90%' }, 0.2)
  .fromTo('#hero h1', { opacity: 0, y: '+=20' }, { opacity: 1, y: 0 }, 0.8)
  .fromTo('#hero img', { opacity: 0, x: '+=20' }, { opacity: 1, x: 0, duration: 1 }, 0.8)
  .fromTo('#hero h2 span, #hero a.hoverable', { opacity: 0, y: '+=20' }, { opacity: 1, stagger: 0.2, y: 0 }, 1)
  .fromTo('#hero .social li', { opacity: 0, y: '+=10' }, { opacity: 1, stagger: 0.1, y: 0, duration: 0.2 }, '-=0.4')
