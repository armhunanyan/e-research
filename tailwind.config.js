module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container: {
      center: true,
      padding:"15px",
      screens: {
          sm: "100%",
          md: "968px",
          lg: "1000px",
          xl: "1200px",
      }
    },
    colors: {
      black: '#000000',
      white: '#ffffff',
      cyan: {
        DEFAULT: '#B4F9F9',
        hover: '#86FFFF',
        active: '#B4F9F9',
        alt: '#00F5D880'
      },
      blue: {
        DEFAULT: '#0F00F1',
        hover: '#0D00D2',
        active: '#0F00F1',
        dark: '#03033F',
        contacts: '#0C0391'
      },
      gray: {
        DEFAULT: '#E8E8E880',
        light: '#0C03910D',
        dark: '#03033F59',
        inactive: '#CFCFCF',
      },
      fontSize: {
        'xs': '.75rem',
        'sm': '.875rem',
        'base': '1rem',
        'lg': '1.125rem',
        'xl': '1.375rem', //22
        '2xl': '1.75rem',
        '3xl': '2.125rem',
        '4xl': '3rem',
      }
    },
    extend: {
      spacing: {
        10: '10px',
        15: '15px',
        20: '20px',
        25: '25px',
        30: '30px',
        40: '40px',
        50: '50px',
        65: '65px',
        80: '80px',
        100: '100px',
        120: '120px',
        200: '200px',
      },
      backgroundImage:{
        address: 'url("/images/icons/address.svg")',
        phone: 'url("/images/icons/phone.svg")',
        smartphone: 'url("/images/icons/smartphone.svg")',
        email: 'url("/images/icons/email.svg")',
        fb: 'url("/images/icons/fb.svg")',
        insta: 'url("/images/icons/insta.svg")',
        ln: 'url("/images/icons/ln.svg")',
      },
    },
  },
  plugins: [],
}
