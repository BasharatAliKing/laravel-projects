tailwind.config = {
    theme: {
      extend: {
        container: {
            padding: {
              DEFAULT: '1rem',
              sm: '2rem',
              lg: '4rem',
              xl: '5rem',
              '2xl': '6rem',
            },
            center: true,
          },
        colors: {
          clifford: '#da373d',
          dark:"#040922",
          green:"#00b243",
          light:"#acaeb6"
        },
        backgroundImage: {
          'home-bg': "url('/assets/images/pattern-bg-1.jpg')",
          'timebg': "url('/assets/images/91.jpg')",
          'customersbg': "url('/assets/images/1 (1).jpg')",
          'footerbg': "url('/assets/images/footer-bg-1.jpg')",
          'aboutcontact': "url('/assets/images/about-contactbg.jpg')",
        },
        fontFamily: {
          'jost': " ''Jost', sans-serif",
        },
       
      }
    }
  }