const defaults = require('tailwindcss/defaultTheme');

module.exports = {
  content: require('fast-glob').sync([
    'source/**/*.php',
    'source/**/*.html',
    'source/**/*.md',
    'source/**/*.js',
  ]),
  theme: {
    extend: {
      backgroundImage: {
        'footer-pathway': "url('/assets/images/graphics/footer_pathway.svg')",
        'footer-pathway-wide': "url('/assets/images/graphics/footer_pathway.svg')",
        'select-arrow-white': "url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke-linecap='round' stroke='%23ffffff' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e\")",
        'office-finder-pathway-burgundy': "url('/assets/images/graphics/office_finder_pathway.svg')",
        'office-finder-pathway-navy': "url('/assets/images/graphics/office_finder_pathway_navy.svg')",
        'white-shield': "url('/assets/images/logos/uhy_shield_white.svg')",
        'chevron-right': "url('/assets/images/icons/chevron-right.svg')",
        'chevron-down': "url('/assets/images/icons/chevron-down.svg')",
        'testimonial-pathway': "url('/assets/images/graphics/testimonials-pathway.svg')"
      },
      backgroundSize: {
        'footer': '50% 100%',
        'full': '100%',
        '105': '105%',
        'h-full-w-auto': "auto 100%",
        'h-full-w-auto-zoom': "auto 105%",
      },
      backgroundPosition: {
        'office-finder-position': '-40% 140%',
        'subscribe-shield': '115% 50%',
        'footer-pathway-pos': '120% 100%',
      },
      colors: {
        'black': {
          DEFAULT: '#000000',
          'light': '#585759',
          'faded': 'rgba(0,0,0,0.22)',
        },
        'green': {
          DEFAULT: '#3AB45B',
          'dark': '#007041',
          'mid': '#43b02a',
          'light': '#78D64B',
          'sage': '#9AB9AD',
          'forest': '#005844'
        },
        'aubergine': {
          DEFAULT: '#672146',
          'light': '#8d5974',
        },
        'turquoise': {
          DEFAULT: '#00BDB1'
        },
        'grey': {
          DEFAULT: '#F6F5F6',
          'dark': '#D7DAE2',
        },
        'french-grey': '#9AB9AD',
        'orange': {
          DEFAULT: '#dc3513',
        },
        'navy': {
          DEFAULT: '#002F6C',
          'mid': '#5CA3B3'
        },
        'pink': {
          DEFAULT: '#E63888',
        },
        'purple': {
          DEFAULT: '#8F1A95'
        },
        'yellow': {
          DEFAULT: '#FFB500',
        }
      },
      dropShadow: {
        'homepage-banner-heading': '0px 0px 10px rgba(0,0,0,0.80)',
        'homepage-banner-text': '0px 0px 8px rgba(0,0,0,0.80)',
      },
      transitionDelay: {
        '1600': '1600ms',
        '1200': '1200ms',
        '800': '800ms',
        '500': '500ms',
        '400': '400ms'
      },
      transitionDuration: {
        '800': '800ms',
        '1000': '1000ms',
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            color: theme('colors.black-light'),
            fontWeight: 300,
            '--tw-prose-bullets': '#43b02a'
          },
        },
      }),
      scale: {
        '80': '0.8',
        '60': '0.6',
      },
      animation: {
        'banner-load': 'bannerLoad 1.5s ease-out',
        'banner-load-pathway-purple': 'bannerPathwayPurple 1.5s ease-out',
        'banner-load-pathway-pink': 'bannerPathwayPink 1.5s ease-in-out',
      },
      keyframes: {
        bannerLoad: {
          '0%': { transform: 'translate(5rem, 0%)', opacity: '0' },
          '100%': { transform: 'translate(0, 0)', opacity: '1'}
        },
        bannerPathwayPurple: {
          '0%': { transform: 'translate(100%, -50%) scale(2)', opacity: '0'},
          '100%': { transform: 'translate(0) scale(1)', opacity: '1'},
        },
        bannerPathwayPink: {
          '0%': { transform: 'translate(100%, 100%) scale(0.8)', opacity: '0'},
          '100%': { transform: 'translate(0rem) scale(1)', opacity: '1'},
        }
      },
      content: {
        'quote-open': '"\\201C"',
        'quote-close': '"\\201D"',
      },
      flexBasis: {
        '4/10': '40%',
        '6/10': '60%'
      },
      fontSize: {
        '2xl': ['1.5rem', '30px']
      }
    },
    fontFamily: {
      'sans': ["mundial", 'sans-serif'],
    },
    screens: {
      'sm': '640px',
      'md': '768px',
      'lg': '1024px',
      'xl': '1280px',
      '2xl': '1440px',
      '3xl': '1536px',
      '4xl': '1920px',
    },
    container: {
      padding: {
        DEFAULT: '1rem',
        sm: '2rem',
        lg: '4rem',
        xl: '5rem',
        '2xl': '6rem',
        '3xl': '8rem',
        '4xl': '20rem',
      },
    },
  },
  safelist: [
    'bg-green',
    'bg-green-dark',
    'bg-green-mid',
    'bg-green-light',
    'bg-aubergine',
    'bg-teal',
    'bg-black',
    'bg-orange',
    'bg-green/80',
    'bg-green-dark',
    'bg-green-mid',
    'bg-green-light',
    'bg-green-forest',
    'bg-aubergine',
    'bg-aubergine-light',
    'bg-turquoise',
    'bg-black',
    'bg-orange',
    'bg-french-grey',
    'bg-grey',
    'bg-grey-dark',
    'bg-navy',
    'bg-navy-mid',
    'bg-pink',
    'bg-purple',
    'bg-yellow',
    'translate-y-10',
    'text-center',
    'text-left',
    'text-right'
  ],
  plugins: [
    require('@tailwindcss/typography'),
    require('@tailwindcss/forms'),
  ],
};
