</div>

<footer class="footer" data-cursor="-inverse">
	<div class="container">
		<div class="container-wrapper">
			<h1 data-reveal="true">
				<small class="gilroy-bold">Ready to work with me?</small>
				<a class="link_ has_union_" href="mailto:prateeksaini2802@gmail.com">prateeksaini2802@gmail.com</a>
			</h1>
			<div class="dribbble-button-div dribbble-colored">
				<a href="https://dribbble.com/designbyprateek" class="button-link" target="_blank">
					<img class="icon" src="assets/images/icons/union-white.svg">
				</a>
			</div>
			<div class="footer-social">
				<p class="gilroy-bold">Social</p>
				<ul>
					<li>
						<a href="https://dribbble.com/designbyprateek" target="_blank" class="link_ gilroy-regular">Dribbble</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/in/designbyprateek/" target="_blank" class="link_ gilroy-regular">Linkedin</a>
					</li>
					<li>
						<a href="https://www.behance.net/designbyprateek" target="_blank" class="link_ gilroy-regular">Behance</a>
					</li>
					<li>
						<a href="https://medium.com/@designbyprateek" target="_blank" class="link_ gilroy-regular">Medium</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="copyright-footer">
		<p class="text-center small-regular">© 2022 Prateek Saini, All right reserved</p>
	</div>
</footer>

<div class="modal aftersellmodal fade" id="aftersellModal" tabindex="-1" aria-labelledby="aftersellModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<iframe src="https://www.youtube.com/embed/dcGAeBwwm7Y"frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>
		</div>
	</div>
</div>

	<script src="assets/vendors/jquery-3.3.1.min.js" type="text/javascript"></script>
	<script src="assets/vendors/aos/js/aos.js" charset="utf-8"></script>
	<script src="assets/vendors/splide/js/splide.js" charset="utf-8"></script>
	<script src="assets/vendors/splide/js/splide.min.js" charset="utf-8"></script>
	<script src="assets/vendors/splide/js/splide-extension-intersection.min.js" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js"></script>
	<script src="assets/vendors/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js"></script>
	<script src="https://unpkg.com/mouse-follower@1/dist/mouse-follower.min.js"></script>
	<script>
		var cursor = new MouseFollower();
	</script>
	<script src="assets/js/bundle.js" type="text/javascript"></script>
	<script src="assets/js/main.js" type="text/javascript"></script>
	<script>
		var dom = new Splide("#dom-slider", {
			type: "slide",
			autoheight: true,
			autoWidth: true,
			isNavigation: true,
			pauseOnHover: false,
			rewind: true,
			interval: 5000,
			pagination: false,
			arrows: false,
			gap: 25,
		}).mount();

		var main = new Splide("#images-slider", {
			type: "fade",
			autoplay: "false",
			intersection: {
				inView: {
					autoplay: true,
				},
				outView: {
					autoplay: false,
				},
			},
			perPage: 1,
			rewind: true,
			perMove: 1,
			pagination: false,
			arrows: false,
		});
		main.sync(dom).mount(window.splide.Extensions);

		var count = new Splide("#counter-slider", {
			type: "fade",
			pagination: false,
			arrows: true,
			perPage: 1,
			perMove: 1,
			gap: 5,
			drag: false,
		});
		count.sync(dom).mount();

		var cont = new Splide("#content-slider", {
			type: "slide",
			perPage: 1,
			perMove: 1,
			arrows: false,
			gap: 15,
			pagination: false,
		});
		cont.sync(dom).mount();
	</script>
	<script type="text/javascript">
		const el = document.querySelector('.my-video-element');

		el.addEventListener('mouseenter', () => {
			cursor.setVideo('assets/images/web-hero.mp4');
		});

		el.addEventListener('mouseleave', () => {
			cursor.removeVideo();
		}); 
	</script>
	<script></script>
</body>
</html>