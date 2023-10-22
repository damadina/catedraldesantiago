<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/panzoom.css"/>
    <style>
.carousel__nav {
  display: flex;
  justify-content: center;
  flex-direction: row-reverse;
}

.carousel__button.is-prev,
.carousel__button.is-next {
  position: unset;
  transform: unset;

  margin: 0 12px;

  width: 26px;
  height: 26px;

  --carousel-button-svg-width: 17px;
  --carousel-button-svg-height: 17px;
  --carousel-button-svg-stroke-width: 2.6;

  border-radius: 50%;
  box-shadow: 0 0 0 2px #1d1d1f;
  outline: none;

  transition: opacity 0.15s;
}

.carousel__button.is-prev:not([disabled]):hover,
.carousel__button.is-next:not([disabled]):hover {
  background: #1d1d1f;
  color: #fff;
}

#newsCarousel a {
  transition: 0.25s;
}

#newsCarousel .is-dragging a {
  cursor: grabbing;
}

#newsCarousel a picture {
  display: block;
  position: relative;
}

#newsCarousel a picture::after {
  opacity: 0;
  transition: 0.25s;
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: #000;
}

#newsCarousel a picture img {
  transition: 0.25s;
}

#newsCarousel a:hover {
  box-shadow: 10px 10px 20px 0px rgb(0 0 0 / 4%),
    -10px 0 20px 0px rgb(0 0 0 / 4%);
}

#newsCarousel a:hover picture img {
  transform: scale(1.05);
}

#newsCarousel a:hover picture::after {
  opacity: 0.15;
}


    </style>
 @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1 class="mt-12 mb-8 px-6 text-center text-lg md:text-2xl font-semibold">
        Apple Inspired Carousel
      </h1>

      <div id="newsCarousel" class="carousel mb-12 py-10 bg-gray-200">
        <div class="carousel__viewport pb-8">
          <a
            href="javascript:;"
            class="carousel__slide px-0 py-0 mx-2.5 w-1/3 bg-white rounded-b"
          >
            <figure>
              <picture class="overflow-hidden rounded-t">
                <img
                  class="w-full"
                  src="https://source.unsplash.com/UTVfyq6ZlBU/480x270"
                />
              </picture>
              <figcaption class="p-6">
                <h3 class="text-xl mb-3 font-semibold leading-tight">
                  Lorem ipsum dolor sit amet
                </h3>
                <p class="text-sm text-gray-500">
                  Et malesuada fames ac turpis egestas integer Lorem ipsum dolor sit
                  amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                  ut labore et dolore magna aliqua.
                </p>
              </figcaption>
            </figure>
          </a>
          <a
            href="javascript:;"
            class="carousel__slide px-0 py-0 mx-2.5 w-1/3 bg-white rounded-b"
          >
            <figure>
              <picture class="overflow-hidden rounded-t">
                <img
                  class="w-full"
                  src="https://source.unsplash.com/NodtnCsLdTE/480x270"
                />
              </picture>
              <figcaption class="p-6">
                <h3 class="text-xl mb-3 font-semibold leading-tight">
                  Aenean libero diam, consequat nec odio vitae
                </h3>
                <p class="text-sm text-gray-500">
                  Praesent auctor, elit et fringilla feugiat, diam leo egestas justo,
                  at maximus nisi sapien vitae dui.
                </p>
              </figcaption>
            </figure>
          </a>

          <a
            href="javascript:;"
            class="carousel__slide px-0 py-0 mx-2.5 w-1/3 bg-white rounded-b"
          >
            <figure>
              <picture class="overflow-hidden rounded-t">
                <img
                  class="w-full"
                  src="https://source.unsplash.com/oYfE7h9UBbk/480x270"
                />
              </picture>
              <figcaption class="p-6">
                <h3 class="text-xl mb-3 font-semibold leading-tight">
                  Ut convallis faucibus convallis
                </h3>
                <p class="text-sm text-gray-500">
                  ENam suscipit, justo eu elementum pulvinar, magna sem tempor ex,
                  vitae iaculis tellus odio non nisl. Duis dolor orci, viverra ut
                  finibus sed, aliquet vitae tortor.
                </p>
              </figcaption>
            </figure>
          </a>

          <a
            href="javascript:;"
            class="carousel__slide px-0 py-0 mx-2.5 w-1/3 bg-white rounded-b"
          >
            <figure>
              <picture class="overflow-hidden rounded-t">
                <img
                  class="w-full"
                  src="https://source.unsplash.com/9sJcLFELrwk/480x270"
                />
              </picture>
              <figcaption class="p-6">
                <h3 class="text-xl mb-3 font-semibold leading-tight">
                  Cras facilisis sapien ac velit mollis
                </h3>
                <p class="text-sm text-gray-500">
                  Aenean consequat auctor posuere. Integer sed magna volutpat,
                  efficitur nisl ut, dignissim neque. Vestibulum convallis nec dui a
                  euismod.
                </p>
              </figcaption>
            </figure>
          </a>
          <a
            href="javascript:;"
            class="carousel__slide px-0 py-0 mx-2.5 w-1/3 bg-white rounded-b"
          >
            <figure>
              <picture class="overflow-hidden rounded-t">
                <img
                  class="w-full"
                  src="https://source.unsplash.com/-ICqogYdxsw/480x270"
                />
              </picture>
              <figcaption class="p-6">
                <h3 class="text-xl mb-3 font-semibold leading-tight">
                  Suspendisse sollicitudin tempor malesuada
                </h3>
                <p class="text-sm text-gray-500">
                  ed consectetur tellus egestas, consequat dolor at, tempus augue.
                  Morbi quis ipsum quis velit varius laoreet in scelerisque erat.
                  Suspendisse sed accumsan erat.
                </p>
              </figcaption>
            </figure>
          </a>
        </div>
      </div>


      <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@4.0/dist/fancybox.umd.js"></script>
      <script>
        // Initialise Carousel
        const newsCarousel = new Carousel(document.querySelector("#newsCarousel"), {
        infinite: false,
        Dots: false,
        friction: 0.89,
        slidesToSlide: 2,
        fill: false,
        });
      </script>

</body>
</html>
