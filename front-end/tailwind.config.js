module.exports = {
  purge: [
    './src/**/*.html', './src/**/*.vue', './src/**/*.js',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {

    extend: {
      screens: {
        'xsm':{'min':'0px','max':'259px'}, 
        'ssm':{'min':'260px','max':'319px'},
        'vs': {'min': '320px', 'max': '499px'},
        'vsv':{'min': '320px','max':'360px'},/////
        'vsvs':{'min': '360px','max':'445px'},////
        'x-v': {'min':'0px', 'max': '499px'},/////
        'se': {'min': '320px', 'max': '330px'},
        'vvs':{'min': '320px', 'max': '383px'},
         'lvs': {'min': '401px', 'max': '499px'},
        'sm': {'min': '500px', 'max': '639px'},
        's-sm':{'min': '544px', 'max': '639px'},//////
        'md': {'min': '640px', 'max': '1023px'},
         'lg': {'min': '1024px', 'max': '1279px'},
         'llg':{'min': '1024px', 'max': '1239px'},
         'xl': {'min': '1280px', 'max': '1535px'},
         'xxl': {'min': '1330px', 'max': '1535px'},///////////
         '2xl': {'min': '1536px'},
         '2xxl': {'min': '1586px'},////////////
         'mv': {'min': '0px', 'max': '1023px'},
         'dv':{'min': '1024px'},
      },
      colors:{
        bastille: '#1E1825',
        red:{
          500: '#EF4444',
          700: '#E50F0F',
          danger:'#FF0028',
          buttons:'#CD0F0F',
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
        green:{
          150:'#708d3a',
        },
        waterloo:'#35397B',
        balticsea: '#1C1720',
        warning:' #FE6B00',
        success: '#708D3A',

      },
        spacing: {
        0.5: '0.2rem',
        1.4: '0.300rem',
        15:'3.6rem',
        17: '4.3rem',
        122: '5.3rem',
        6.5: '6.5rem',
        22: '5.5rem',
        28.5: '7.5rem',
        355: '8.9rem',
        34: '8.7rem',//new
        42: '10.5rem',//new
        46: '11.5rem',//new
        50: '12.5rem',
        58:'14.5rem',
        62: '17rem',
        63: '17.5rem',
        74:'19rem',
        75: '19rem',
        222: '19.5rem',
        224: '20.5rem',
        87: '22rem',
        88: '22.5rem',
        89: '23rem',
        91: '23.5rem',
        90: '24rem',
        96: '24.9rem',
        95: '25rem',
        94: '25.4rem',///////
        95.5: '25.7rem',///////// 
        96.5: '26rem',
        26.5: '26.5rem',
        27: '26.7rem',
        96.7: '28rem',
        97: '30rem',
        448: '30.5rem',
        97.2:'31.5rem',
        31.75: '31.75rem',
        97.5: '32.5rem',
        528: '33rem',
        98: '33rem',
        98.5:'34.3rem',//////////
        550: '34.375rem',
        538: '35rem',
        99: '35rem',
        99.5:'37rem',
        608: '38rem',
        100:'40rem',
        105: '40.2rem',
        101:'40.5rem',
        110: '45rem',
        150:'47rem',
        200: '65rem',
        500: '500rem',
        //px
        eh: '430px',
        ew: '844px',
        220: '267px',

        65:'65%',
        35:'35%',
        
          
      },
      fontFamily: {
        nunito: ['Nunito'],
        raleway: ['Raleway']
      },
      fontSize: {
        md: ['0.910rem', { lineHeight: '1.28rem' }],  
      },
      zIndex: {
        '100':'100',
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
