module.exports = {
    purge: [
      './src/**/*.html', './src/**/*.vue', './src/**/*.js',
    ],
    darkMode: false, // or 'media' or 'class'
    theme: {
      extend: {
        screens: {
          vs: '300px',
          ssm: '400px',
          sm: '640px',
          md: '768px',
          mmd: '900px',
          lg: '1024px',
          xl: '1280px',
          '1xl': '1500px',
          '2xl': '1536px',
        },
        colors:{
          bastille: '#1E1825',
          red:{
            500: '#EF4444',
            700: '#E50F0F',
          },
          gray:{
            50: '#F9FAFB',
            100: '#F3F4F6',
            400: '#9CA3AF',
            danger: '#FF0028',
            search: '#B72525'

          },
        },
        fontFamily: {
          nunito: ['Nunito'],
          raleway: ['Raleway']
        },
      },
    },
    variants: {
      display: ['responsive', 'group-hover', 'group-focus'],
      
      extend: {
        padding: ['hover'],
        textDecoration: ['focus-visible'],
        translate: ['motion-reduce'],
        justifySelf: ['hover', 'focus'],
        placeSelf: ['hover', 'focus'],
        alignContent: ['hover', 'focus'],
        scale: ['focus-within'],
        fontSize: ["hover","focus-within","focus"],
        justifyContent: ['responsive'],
        justifyItems: ['responsive'],
        width: ['responsive'],
        float: ['responsive'],
        flex: ['responsive'],
  
      },
    },
    plugins: [
      require('tailwindcss'),
      require('autoprefixer'),
    ],
  }
  
