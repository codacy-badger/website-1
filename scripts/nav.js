// Uncomment this for a sticky footer.
//
// .wrapper-for-content-outside-of-footer {
//   min-height: 100%;
//   height: auto !important;
//   height: 100%;
//   margin: 0 auto -4em;
// }

// html, body {
//  height: 100%;
// }

// .wrapper-for-content-outside-of-footer::after {
//   content: "";
//   display: block;
// }

// .footer-2, .wrapper-for-content-outside-of-footer::after {
//   height: 17em;

//   @include media($large-screen) {
//     height: 4em;
//   }
// }

.footer-2 {
  $base-spacing: 1.5em !default;
  $action-color: rgb(71, 125, 202) !default;
  $medium-screen: 40em !default;
  $large-screen: 53.75em !default;
  $footer-background: desaturate(darken($action-color, 20%), 30%);
  $footer-color: white;
  $footer-link-color: transparentize($footer-color, 0.6);
  $footer-disclaimer-color: transparentize($footer-color, 0.6);

  background: $footer-background;
  display: inline-block;
  padding: $base-spacing;
  width: 100%;

  .footer-logo {
    margin-bottom: 1em;
    margin-right: 1em;

    @include media($large-screen) {
      float: left;
      margin-bottom: 0;
    }
  }

  .footer-logo img {
    height: 1.6em;
  }

  ul {
    line-height: 1.5em;
    margin: 0 0 1em 0;
    padding: 0;

    @include media($large-screen) {
      float: left;
      line-height: 1.8em;
      margin-bottom: 0;
      margin-left: 1em;
    }
  }

  ul li {
    list-style: none;
    padding-right: 1em;

    @include media($large-screen) {
      display: inline;
      text-align: left;
    }
  }

  ul li a {
    color: $footer-link-color;
    text-decoration: none;

    &:focus,
    &:hover {
      color: transparentize($footer-color, 0);
    }
  }

  .footer-secondary-links {
    @include media($large-screen) {
      float: right;
    }

    li {
      font-size: 0.8em;
    }

    ul.footer-social {
      margin: 1em 0 0 0;

      @include media($large-screen) {
        float: right;
        margin-top: 0;
      }

      li {
        float: left;
        font-size: 1em;
        line-height: 0;
        margin: 0;
        padding-right: 0.7em;

        &:last-child {
          padding-right: 0;
        }
      }

      img {
        height: 1.6em;
        opacity: 0.7;
        padding: 1px;

        &:focus,
        &:hover {
          opacity: 1;
        }
      }
    }
  }
}
