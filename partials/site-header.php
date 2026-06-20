<header class="mx-auto max-w-6xl px-6 sm:px-10 lg:px-16 pt-7">
  <nav class="flex items-center">
    <a href="#" class="flex items-center gap-3">
      <span class="inline-flex h-10 w-10 items-center justify-center rounded-xl bg-black/5">
        <svg viewBox="0 0 20 20" class="h-6 w-6 text-ink">
          <g fill="currentColor">
            <circle cx="5" cy="6" r="1.8" />
            <circle cx="10" cy="6" r="1.8" />
            <circle cx="15" cy="6" r="1.8" />
            <circle cx="5" cy="11" r="1.8" />
            <circle cx="10" cy="11" r="1.8" />
            <circle cx="5" cy="16" r="1.8" />
          </g>
        </svg>
      </span>
      <span class="text-xl font-extrabold tracking-tight">Somatech</span>
    </a>

    <div class="hidden items-center gap-10 text-[15px] font-semibold text-ink/80 md:flex ml-10">
      <a href="#service" class="hover:text-ink">Service</a>
      <a href="#about" class="hover:text-ink">About Us</a>
      <a href="#case-study" class="hover:text-ink">Case study</a>
      <button class="group inline-flex items-center gap-2 hover:text-ink" type="button">
        Product
        <svg viewBox="0 0 20 20" class="h-4 w-4 text-ink/60 group-hover:text-ink">
          <path
            d="M5.5 7.5 10 12l4.5-4.5"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
            stroke-linejoin="round"
          />
        </svg>
      </button>
    </div>

    <a
      href="https://wa.me/6282133440727"
      class="hidden rounded-full border border-black/20 bg-white/55 px-6 py-3 text-sm font-extrabold shadow-sm backdrop-blur transition hover:bg-white md:inline-flex ml-auto"
    >
      Contact Us
    </a>
    <div class="flex items-center gap-3 ml-auto md:ml-0">
      <button
        id="menu-btn"
        type="button"
        class="inline-flex h-11 w-11 items-center justify-center rounded-full border border-black/15 bg-white/50 backdrop-blur md:hidden"
        aria-label="Open menu"
      >
        <svg viewBox="0 0 20 20" class="h-5 w-5">
          <path
            d="M4 6h12M4 10h12M4 14h12"
            fill="none"
            stroke="currentColor"
            stroke-width="1.8"
            stroke-linecap="round"
          />
        </svg>
      </button>
    </div>
  </nav>
</header>

<div
  id="mobile-menu"
  class="fixed inset-0 z-50 hidden bg-ink/95 backdrop-blur-sm"
>
  <div class="flex h-full flex-col items-center justify-center gap-8">
    <button
      id="menu-close"
      type="button"
      class="absolute right-6 top-6 inline-flex h-11 w-11 items-center justify-center rounded-full border border-white/20 bg-white/10 text-white backdrop-blur"
      aria-label="Close menu"
    >
      <svg viewBox="0 0 20 20" class="h-5 w-5">
        <path
          d="M5 5l10 10M15 5l-10 10"
          fill="none"
          stroke="currentColor"
          stroke-width="1.8"
          stroke-linecap="round"
        />
      </svg>
    </button>
    <a href="#service" class="text-2xl font-extrabold text-white hover:text-lime mobile-link">Service</a>
    <a href="#about" class="text-2xl font-extrabold text-white hover:text-lime mobile-link">About Us</a>
    <a href="#case-study" class="text-2xl font-extrabold text-white hover:text-lime mobile-link">Case Study</a>
    <a href="https://wa.me/6282133440727" class="mt-4 inline-flex items-center gap-3 rounded-full bg-white px-8 py-4 text-sm font-extrabold text-ink">
      Contact Us
      <span class="inline-flex h-9 w-9 items-center justify-center rounded-full bg-ink text-white">
        <svg viewBox="0 0 20 20" class="h-4 w-4">
          <path d="M7 5l6 5-6 5" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
        </svg>
      </span>
    </a>
  </div>
</div>
