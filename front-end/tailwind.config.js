module.exports = {
  purge: [
    './src/**/*.html', './src/**/*.vue', './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      screens: {
       'vs': {'min': '300px', 'max': '639px'},
      'md': {'min': '640px', 'max': '1023px'},
      'lg': {'min': '1024px', 'max': '1279px'},
      'xl': {'min': '1280px', 'max': '1535px'},
      '2xl': {'min': '1536px'},
      },
      colors:{
        bastille: '#1E1825',
        red:{
          500: '#EF4444',
          700: '#E50F0F',
          danger:'#FF0028',
          search:'#B72525'
        },
        gray:{
          50: '#F9FAFB',
          100: '#F3F4F6',
          400: '#9CA3AF',
          bgcolor:'#EBEBEB',
        },
        orange:{
          100:'#EE6D11',
        },
        waterloo:'#35397B',
        balticsea: '#1C1720',
        warning:' #FE6B00',

      },
        spacing: {
          355: '8.9rem',
          448: '30.5rem',
          224: '20.5rem',
          528: '33rem',
          1.4: '0.300rem',
          89: '23rem',
          90: '24rem',
          96: '24.9rem',
          96.5: '26rem',
          96.7: '28rem',
          97: '30rem',
          97.2:'31.5rem',
          97.5: '32.5rem',
          98: '33rem',
          99: '35rem',
          100:'40rem',
          500: '500rem',
          500: '500rem',
          17: '4.3rem',
          50: '12.5rem'
          
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
