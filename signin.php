<?php 
  if (!isset($_SESSION)) {
    session_start();
  }
  include('login.php');
?>
<!DOCTYPE html>

<!-- saved from url=(0051)https://getbootstrap.com/docs/4.6/examples/sign-in/ -->
<html lang="en" class="mdl-js"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Đăng nhập với L'OTUS</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.6/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="./login_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">



    <!-- Favicons -->
<link rel="icon" href="./images/favicon.ico" type="image/x-icon">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="./login_files/signin.css" rel="stylesheet">
  <style>
    @-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;box-shadow:0 0 .625em #d9d9d9;overflow-y:hidden}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:initial;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon-text{font-size:2em;font-weight:700;line-height:1em}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:2em;height:2.8125em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.25em;left:-.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 2em;transform-origin:0 2em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:showSweetToast .5s;animation:showSweetToast .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:hideSweetToast .2s forwards;animation:hideSweetToast .2s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:animate-toast-success-tip .75s;animation:animate-toast-success-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:animate-toast-success-long .75s;animation:animate-toast-success-long .75s}@-webkit-keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@-webkit-keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:10px;background-color:transparent;z-index:1060;overflow-x:hidden;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem;box-sizing:border-box}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-popup .swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-popup .swal2-title{display:block;position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-popup .swal2-actions{flex-wrap:wrap;align-items:center;justify-content:center;margin:1.25em auto 0;z-index:1}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{width:2.5em;height:2.5em;margin:.46875em;padding:0;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;box-sizing:border-box;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{display:inline-block;width:15px;height:15px;margin-left:5px;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff;content:'';-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal}.swal2-popup .swal2-styled{margin:.3125em;padding:.625em 2em;font-weight:500;box-shadow:none}.swal2-popup .swal2-styled:not([disabled]){cursor:pointer}.swal2-popup .swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-popup .swal2-styled::-moz-focus-inner{border:0}.swal2-popup .swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-popup .swal2-image{max-width:100%;margin:1.25em auto}.swal2-popup .swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;height:1.2em;padding:0;transition:color .1s ease-out;border:none;border-radius:0;outline:initial;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer;overflow:hidden}.swal2-popup .swal2-close:hover{-webkit-transform:none;transform:none;color:#f27474}.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{display:none}.swal2-popup .swal2-content{justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;z-index:1;word-wrap:break-word}.swal2-popup #swal2-content{text-align:center}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{margin:1em auto}.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;font-size:1.125em;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);box-sizing:border-box}.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{color:#ccc}.swal2-popup .swal2-range input{width:80%}.swal2-popup .swal2-range output{width:20%;font-weight:600;text-align:center}.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{height:2.625em;margin:1em auto;padding:0;font-size:1.125em;line-height:2.625em}.swal2-popup .swal2-input{height:2.625em;padding:0 .75em}.swal2-popup .swal2-input[type=number]{max-width:10em}.swal2-popup .swal2-file{font-size:1.125em}.swal2-popup .swal2-textarea{height:6.75em;padding:.75em}.swal2-popup .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;color:#545454;font-size:1.125em}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{align-items:center;justify-content:center}.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{margin:0 .4em}.swal2-popup .swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;background:#f0f0f0;color:#666;font-size:1em;font-weight:300;overflow:hidden}.swal2-popup .swal2-validation-message::before{display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center;content:'!';zoom:normal}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}.swal2-icon{position:relative;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;zoom:normal}.swal2-icon-text{font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;top:-.25em;left:-.25em;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%;z-index:2;box-sizing:content-box}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;height:.3125em;border-radius:.125em;background-color:#a5dc86;z-index:2}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{align-items:center;margin:0 0 1.25em;padding:0;font-weight:600}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{background:#add8e6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{width:2.5em;height:.4em;margin:0 -1px;background:#3085d6;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:initial!important}}
    </style>
    <style type="text/css">
    .styles__viewOcrextCanvasMainRight___3nT6i {
    -webkit-box-flex: 1;
        -ms-flex: 1;
            flex: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;}

</style>
<style>
  @-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;box-shadow:0 0 .625em #d9d9d9;overflow-y:hidden}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:initial;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon-text{font-size:2em;font-weight:700;line-height:1em}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:2em;height:2.8125em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.25em;left:-.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 2em;transform-origin:0 2em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:showSweetToast .5s;animation:showSweetToast .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:hideSweetToast .2s forwards;animation:hideSweetToast .2s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:animate-toast-success-tip .75s;animation:animate-toast-success-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:animate-toast-success-long .75s;animation:animate-toast-success-long .75s}@-webkit-keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@-webkit-keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:10px;background-color:transparent;z-index:1060;overflow-x:hidden;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem;box-sizing:border-box}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-popup .swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-popup .swal2-title{display:block;position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-popup .swal2-actions{flex-wrap:wrap;align-items:center;justify-content:center;margin:1.25em auto 0;z-index:1}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{width:2.5em;height:2.5em;margin:.46875em;padding:0;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;box-sizing:border-box;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{display:inline-block;width:15px;height:15px;margin-left:5px;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff;content:'';-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal}.swal2-popup .swal2-styled{margin:.3125em;padding:.625em 2em;font-weight:500;box-shadow:none}.swal2-popup .swal2-styled:not([disabled]){cursor:pointer}.swal2-popup .swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-popup .swal2-styled::-moz-focus-inner{border:0}.swal2-popup .swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-popup .swal2-image{max-width:100%;margin:1.25em auto}.swal2-popup .swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;height:1.2em;padding:0;transition:color .1s ease-out;border:none;border-radius:0;outline:initial;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer;overflow:hidden}.swal2-popup .swal2-close:hover{-webkit-transform:none;transform:none;color:#f27474}.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{display:none}.swal2-popup .swal2-content{justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;z-index:1;word-wrap:break-word}.swal2-popup #swal2-content{text-align:center}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{margin:1em auto}.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;font-size:1.125em;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);box-sizing:border-box}.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{color:#ccc}.swal2-popup .swal2-range input{width:80%}.swal2-popup .swal2-range output{width:20%;font-weight:600;text-align:center}.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{height:2.625em;margin:1em auto;padding:0;font-size:1.125em;line-height:2.625em}.swal2-popup .swal2-input{height:2.625em;padding:0 .75em}.swal2-popup .swal2-input[type=number]{max-width:10em}.swal2-popup .swal2-file{font-size:1.125em}.swal2-popup .swal2-textarea{height:6.75em;padding:.75em}.swal2-popup .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;color:#545454;font-size:1.125em}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{align-items:center;justify-content:center}.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{margin:0 .4em}.swal2-popup .swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;background:#f0f0f0;color:#666;font-size:1em;font-weight:300;overflow:hidden}.swal2-popup .swal2-validation-message::before{display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center;content:'!';zoom:normal}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}.swal2-icon{position:relative;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;zoom:normal}.swal2-icon-text{font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;top:-.25em;left:-.25em;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%;z-index:2;box-sizing:content-box}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;height:.3125em;border-radius:.125em;background-color:#a5dc86;z-index:2}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{align-items:center;margin:0 0 1.25em;padding:0;font-weight:600}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{background:#add8e6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{width:2.5em;height:.4em;margin:0 -1px;background:#3085d6;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:initial!important}}</style><style type="text/css">
    .styles__viewItem___A84CZ{

    }


.styles__btnShowTextConIcon___3VZlK {
  padding: 0 0 0 20px;
  cursor: pointer;
}

.styles__btnEdit___3NWR7 {
  padding: 0 0 0 20px;
  cursor: pointer;
}

.styles__btnEditActive___1Hk8P svg path {
  stroke: #1DA1F2;
}

.styles__title___1MedQ {
  color: var(--6-o-ncolor-high-emphasis, #333);
  font-size: 18px;
  font-style: normal;
  font-weight: 600;
  line-height: 20px;
}

.styles__label___2yGIE {
  color: var(--6-o-ncolor-high-emphasis, #333);
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: 20px;
  padding-top: 22px;
}

.styles__viewEditOrText___P_qdF {
  color: var(--6-o-ncolor-high-emphasis, #333);
  font-size: 14px;
  padding-top: 12px;
  font-style: normal;
  font-weight: 400;
  line-height: 20px;
}

.styles__viewEditOrText___P_qdF textarea {
  width: 100%;
  border: none;
  background-color: transparent;
  outline: none;
  font-family: arial;
  min-height: 100px;
  -ms-flex-negative: 0;
      flex-shrink: 0;
  border-radius: 4px;
  border: 1px solid var(--6-o-ncolor-dark-ui-medium-emphasis, #B2B2B2);
  padding: 6px;
  font-size: 14px;
  color: var(--6-o-ncolor-high-emphasis, #333);
  font-style: normal;
  font-weight: 400;
  line-height: 20px;
}


.styles__viewBtnEdit___7tC-Q {
  border-radius: 100px;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 4px 16px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  gap: 10px;
  color: var(--5-surface-primary, #FFF);
  font-size: 14px;
  cursor: pointer;
  font-style: normal;
  font-weight: 400;
  line-height: 16px;
}

.styles__viewBtnCancel___AKDrs {
  border-radius: 100px;
  background: var(--1-primary-azure, #B2B2B2);
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 4px 12px;
  cursor: pointer;
  margin-right: 10px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  gap: 10px;
  color: var(--5-surface-primary, #FFF);
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 16px;
}

.styles__viewEdit___Lj4OD {
  margin-top: 10px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-orient: horizontal;
  -webkit-box-direction: normal;
      -ms-flex-direction: row;
          flex-direction: row;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}
</style>
<style type="text/css">.styles__btnShowTextCon___vWAJd {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  background: #F9F8F8;
  margin-left: 18px;
  padding: 16px 18px;
}


.styles__viewMain___2iIrw {
  -webkit-box-flex: 1;
      -ms-flex: 1;
          flex: 1;
  -webkit-user-select: text;
     -moz-user-select: text;
      -ms-user-select: text;
          user-select: text;
}

.styles__viewMainScroll___2shb6 {
  overflow: auto;
  max-height: 350px;
  overflow-x: none;
}

.styles__viewFooter___wDsh1 {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: end;
      -ms-flex-pack: end;
          justify-content: flex-end;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.styles__viewBtnSave___yrkn5 {
  border-radius: 100px;
  background: var(--1-primary-azure, #1DA1F2);
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 4px 16px;
  -webkit-box-orient: vertical;
  -webkit-box-direction: normal;
      -ms-flex-direction: column;
          flex-direction: column;
  -webkit-box-align: start;
      -ms-flex-align: start;
          align-items: flex-start;
  gap: 10px;
  color: var(--5-surface-primary, #FFF);
  font-size: 14px;
  font-style: normal;
  font-weight: 400;
  line-height: 16px;
}
</style>
<style type="text/css">.styles__viewItem___2Yf63 {
  color: var(--Light-ON-High-emphasis, #2C2C2C);
  font-family: "Open Sans";
  font-size: 10px;
  font-style: normal;
  font-weight: 400;
  line-height: 12px;
  /* 120% */
  border-radius: 30px;
  background: #C8C7CC;
  display: -webkit-inline-box;
  display: -ms-inline-flexbox;
  display: inline-flex;
  padding: 4px 10px;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  gap: 10px;
}
</style>
<style type="text/css">.styles__btnItem___XXexq {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
        -ms-flex-direction: row;
            flex-direction: row;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    padding-right: 56px;
    cursor: pointer;
}

.styles__btnItemShowText___BWRNq {
    padding-right: 0px;
}

.styles__btnItemText___3GlYJ {
    color: #B2B2B2;
    padding-left: 8px;
    font-size: 16px;
    font-style: normal;
    font-weight: 400;
    line-height: 20px;
}
</style>
<style>
  @-webkit-keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@keyframes swal2-show{0%{-webkit-transform:scale(.7);transform:scale(.7)}45%{-webkit-transform:scale(1.05);transform:scale(1.05)}80%{-webkit-transform:scale(.95);transform:scale(.95)}100%{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@keyframes swal2-hide{0%{-webkit-transform:scale(1);transform:scale(1);opacity:1}100%{-webkit-transform:scale(.5);transform:scale(.5);opacity:0}}@-webkit-keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@keyframes swal2-animate-success-line-tip{0%{top:1.1875em;left:.0625em;width:0}54%{top:1.0625em;left:.125em;width:0}70%{top:2.1875em;left:-.375em;width:3.125em}84%{top:3em;left:1.3125em;width:1.0625em}100%{top:2.8125em;left:.875em;width:1.5625em}}@-webkit-keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@keyframes swal2-animate-success-line-long{0%{top:3.375em;right:2.875em;width:0}65%{top:3.375em;right:2.875em;width:0}84%{top:2.1875em;right:0;width:3.4375em}100%{top:2.375em;right:.5em;width:2.9375em}}@-webkit-keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@keyframes swal2-rotate-success-circular-line{0%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}5%{-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}12%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}100%{-webkit-transform:rotate(-405deg);transform:rotate(-405deg)}}@-webkit-keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@keyframes swal2-animate-error-x-mark{0%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}50%{margin-top:1.625em;-webkit-transform:scale(.4);transform:scale(.4);opacity:0}80%{margin-top:-.375em;-webkit-transform:scale(1.15);transform:scale(1.15)}100%{margin-top:0;-webkit-transform:scale(1);transform:scale(1);opacity:1}}@-webkit-keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}@keyframes swal2-animate-error-icon{0%{-webkit-transform:rotateX(100deg);transform:rotateX(100deg);opacity:0}100%{-webkit-transform:rotateX(0);transform:rotateX(0);opacity:1}}body.swal2-toast-shown .swal2-container{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-shown{background-color:transparent}body.swal2-toast-shown .swal2-container.swal2-top{top:0;right:auto;bottom:auto;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-top-end,body.swal2-toast-shown .swal2-container.swal2-top-right{top:0;right:0;bottom:auto;left:auto}body.swal2-toast-shown .swal2-container.swal2-top-left,body.swal2-toast-shown .swal2-container.swal2-top-start{top:0;right:auto;bottom:auto;left:0}body.swal2-toast-shown .swal2-container.swal2-center-left,body.swal2-toast-shown .swal2-container.swal2-center-start{top:50%;right:auto;bottom:auto;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-center{top:50%;right:auto;bottom:auto;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-toast-shown .swal2-container.swal2-center-end,body.swal2-toast-shown .swal2-container.swal2-center-right{top:50%;right:0;bottom:auto;left:auto;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-left,body.swal2-toast-shown .swal2-container.swal2-bottom-start{top:auto;right:auto;bottom:0;left:0}body.swal2-toast-shown .swal2-container.swal2-bottom{top:auto;right:auto;bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-toast-shown .swal2-container.swal2-bottom-end,body.swal2-toast-shown .swal2-container.swal2-bottom-right{top:auto;right:0;bottom:0;left:auto}body.swal2-toast-column .swal2-toast{flex-direction:column;align-items:stretch}body.swal2-toast-column .swal2-toast .swal2-actions{flex:1;align-self:stretch;height:2.2em;margin-top:.3125em}body.swal2-toast-column .swal2-toast .swal2-loading{justify-content:center}body.swal2-toast-column .swal2-toast .swal2-input{height:2em;margin:.3125em auto;font-size:1em}body.swal2-toast-column .swal2-toast .swal2-validation-message{font-size:1em}.swal2-popup.swal2-toast{flex-direction:row;align-items:center;width:auto;padding:.625em;box-shadow:0 0 .625em #d9d9d9;overflow-y:hidden}.swal2-popup.swal2-toast .swal2-header{flex-direction:row}.swal2-popup.swal2-toast .swal2-title{flex-grow:1;justify-content:flex-start;margin:0 .6em;font-size:1em}.swal2-popup.swal2-toast .swal2-footer{margin:.5em 0 0;padding:.5em 0 0;font-size:.8em}.swal2-popup.swal2-toast .swal2-close{position:initial;width:.8em;height:.8em;line-height:.8}.swal2-popup.swal2-toast .swal2-content{justify-content:flex-start;font-size:1em}.swal2-popup.swal2-toast .swal2-icon{width:2em;min-width:2em;height:2em;margin:0}.swal2-popup.swal2-toast .swal2-icon-text{font-size:2em;font-weight:700;line-height:1em}.swal2-popup.swal2-toast .swal2-icon.swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line]{top:.875em;width:1.375em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:.3125em}.swal2-popup.swal2-toast .swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:.3125em}.swal2-popup.swal2-toast .swal2-actions{height:auto;margin:0 .3125em}.swal2-popup.swal2-toast .swal2-styled{margin:0 .3125em;padding:.3125em .625em;font-size:1em}.swal2-popup.swal2-toast .swal2-styled:focus{box-shadow:0 0 0 .0625em #fff,0 0 0 .125em rgba(50,100,150,.4)}.swal2-popup.swal2-toast .swal2-success{border-color:#a5dc86}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line]{position:absolute;width:2em;height:2.8125em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.25em;left:-.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:2em 2em;transform-origin:2em 2em;border-radius:4em 0 0 4em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.25em;left:.9375em;-webkit-transform-origin:0 2em;transform-origin:0 2em;border-radius:0 4em 4em 0}.swal2-popup.swal2-toast .swal2-success .swal2-success-ring{width:2em;height:2em}.swal2-popup.swal2-toast .swal2-success .swal2-success-fix{top:0;left:.4375em;width:.4375em;height:2.6875em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line]{height:.3125em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=tip]{top:1.125em;left:.1875em;width:.75em}.swal2-popup.swal2-toast .swal2-success [class^=swal2-success-line][class$=long]{top:.9375em;right:.1875em;width:1.375em}.swal2-popup.swal2-toast.swal2-show{-webkit-animation:showSweetToast .5s;animation:showSweetToast .5s}.swal2-popup.swal2-toast.swal2-hide{-webkit-animation:hideSweetToast .2s forwards;animation:hideSweetToast .2s forwards}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:animate-toast-success-tip .75s;animation:animate-toast-success-tip .75s}.swal2-popup.swal2-toast .swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:animate-toast-success-long .75s;animation:animate-toast-success-long .75s}@-webkit-keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@keyframes showSweetToast{0%{-webkit-transform:translateY(-.625em) rotateZ(2deg);transform:translateY(-.625em) rotateZ(2deg);opacity:0}33%{-webkit-transform:translateY(0) rotateZ(-2deg);transform:translateY(0) rotateZ(-2deg);opacity:.5}66%{-webkit-transform:translateY(.3125em) rotateZ(2deg);transform:translateY(.3125em) rotateZ(2deg);opacity:.7}100%{-webkit-transform:translateY(0) rotateZ(0);transform:translateY(0) rotateZ(0);opacity:1}}@-webkit-keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@keyframes hideSweetToast{0%{opacity:1}33%{opacity:.5}100%{-webkit-transform:rotateZ(1deg);transform:rotateZ(1deg);opacity:0}}@-webkit-keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@keyframes animate-toast-success-tip{0%{top:.5625em;left:.0625em;width:0}54%{top:.125em;left:.125em;width:0}70%{top:.625em;left:-.25em;width:1.625em}84%{top:1.0625em;left:.75em;width:.5em}100%{top:1.125em;left:.1875em;width:.75em}}@-webkit-keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}@keyframes animate-toast-success-long{0%{top:1.625em;right:1.375em;width:0}65%{top:1.25em;right:.9375em;width:0}84%{top:.9375em;right:0;width:1.125em}100%{top:.9375em;right:.1875em;width:1.375em}}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow:hidden}body.swal2-height-auto{height:auto!important}body.swal2-no-backdrop .swal2-shown{top:auto;right:auto;bottom:auto;left:auto;background-color:transparent}body.swal2-no-backdrop .swal2-shown>.swal2-modal{box-shadow:0 0 10px rgba(0,0,0,.4)}body.swal2-no-backdrop .swal2-shown.swal2-top{top:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-top-left,body.swal2-no-backdrop .swal2-shown.swal2-top-start{top:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-top-end,body.swal2-no-backdrop .swal2-shown.swal2-top-right{top:0;right:0}body.swal2-no-backdrop .swal2-shown.swal2-center{top:50%;left:50%;-webkit-transform:translate(-50%,-50%);transform:translate(-50%,-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-left,body.swal2-no-backdrop .swal2-shown.swal2-center-start{top:50%;left:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-center-end,body.swal2-no-backdrop .swal2-shown.swal2-center-right{top:50%;right:0;-webkit-transform:translateY(-50%);transform:translateY(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom{bottom:0;left:50%;-webkit-transform:translateX(-50%);transform:translateX(-50%)}body.swal2-no-backdrop .swal2-shown.swal2-bottom-left,body.swal2-no-backdrop .swal2-shown.swal2-bottom-start{bottom:0;left:0}body.swal2-no-backdrop .swal2-shown.swal2-bottom-end,body.swal2-no-backdrop .swal2-shown.swal2-bottom-right{right:0;bottom:0}.swal2-container{display:flex;position:fixed;top:0;right:0;bottom:0;left:0;flex-direction:row;align-items:center;justify-content:center;padding:10px;background-color:transparent;z-index:1060;overflow-x:hidden;-webkit-overflow-scrolling:touch}.swal2-container.swal2-top{align-items:flex-start}.swal2-container.swal2-top-left,.swal2-container.swal2-top-start{align-items:flex-start;justify-content:flex-start}.swal2-container.swal2-top-end,.swal2-container.swal2-top-right{align-items:flex-start;justify-content:flex-end}.swal2-container.swal2-center{align-items:center}.swal2-container.swal2-center-left,.swal2-container.swal2-center-start{align-items:center;justify-content:flex-start}.swal2-container.swal2-center-end,.swal2-container.swal2-center-right{align-items:center;justify-content:flex-end}.swal2-container.swal2-bottom{align-items:flex-end}.swal2-container.swal2-bottom-left,.swal2-container.swal2-bottom-start{align-items:flex-end;justify-content:flex-start}.swal2-container.swal2-bottom-end,.swal2-container.swal2-bottom-right{align-items:flex-end;justify-content:flex-end}.swal2-container.swal2-grow-fullscreen>.swal2-modal{display:flex!important;flex:1;align-self:stretch;justify-content:center}.swal2-container.swal2-grow-row>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container.swal2-grow-column{flex:1;flex-direction:column}.swal2-container.swal2-grow-column.swal2-bottom,.swal2-container.swal2-grow-column.swal2-center,.swal2-container.swal2-grow-column.swal2-top{align-items:center}.swal2-container.swal2-grow-column.swal2-bottom-left,.swal2-container.swal2-grow-column.swal2-bottom-start,.swal2-container.swal2-grow-column.swal2-center-left,.swal2-container.swal2-grow-column.swal2-center-start,.swal2-container.swal2-grow-column.swal2-top-left,.swal2-container.swal2-grow-column.swal2-top-start{align-items:flex-start}.swal2-container.swal2-grow-column.swal2-bottom-end,.swal2-container.swal2-grow-column.swal2-bottom-right,.swal2-container.swal2-grow-column.swal2-center-end,.swal2-container.swal2-grow-column.swal2-center-right,.swal2-container.swal2-grow-column.swal2-top-end,.swal2-container.swal2-grow-column.swal2-top-right{align-items:flex-end}.swal2-container.swal2-grow-column>.swal2-modal{display:flex!important;flex:1;align-content:center;justify-content:center}.swal2-container:not(.swal2-top):not(.swal2-top-start):not(.swal2-top-end):not(.swal2-top-left):not(.swal2-top-right):not(.swal2-center-start):not(.swal2-center-end):not(.swal2-center-left):not(.swal2-center-right):not(.swal2-bottom):not(.swal2-bottom-start):not(.swal2-bottom-end):not(.swal2-bottom-left):not(.swal2-bottom-right):not(.swal2-grow-fullscreen)>.swal2-modal{margin:auto}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-container .swal2-modal{margin:0!important}}.swal2-container.swal2-fade{transition:background-color .1s}.swal2-container.swal2-shown{background-color:rgba(0,0,0,.4)}.swal2-popup{display:none;position:relative;flex-direction:column;justify-content:center;width:32em;max-width:100%;padding:1.25em;border-radius:.3125em;background:#fff;font-family:inherit;font-size:1rem;box-sizing:border-box}.swal2-popup:focus{outline:0}.swal2-popup.swal2-loading{overflow-y:hidden}.swal2-popup .swal2-header{display:flex;flex-direction:column;align-items:center}.swal2-popup .swal2-title{display:block;position:relative;max-width:100%;margin:0 0 .4em;padding:0;color:#595959;font-size:1.875em;font-weight:600;text-align:center;text-transform:none;word-wrap:break-word}.swal2-popup .swal2-actions{flex-wrap:wrap;align-items:center;justify-content:center;margin:1.25em auto 0;z-index:1}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled[disabled]{opacity:.4}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:hover{background-image:linear-gradient(rgba(0,0,0,.1),rgba(0,0,0,.1))}.swal2-popup .swal2-actions:not(.swal2-loading) .swal2-styled:active{background-image:linear-gradient(rgba(0,0,0,.2),rgba(0,0,0,.2))}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-confirm{width:2.5em;height:2.5em;margin:.46875em;padding:0;border:.25em solid transparent;border-radius:100%;border-color:transparent;background-color:transparent!important;color:transparent;cursor:default;box-sizing:border-box;-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.swal2-popup .swal2-actions.swal2-loading .swal2-styled.swal2-cancel{margin-right:30px;margin-left:30px}.swal2-popup .swal2-actions.swal2-loading :not(.swal2-styled).swal2-confirm::after{display:inline-block;width:15px;height:15px;margin-left:5px;border:3px solid #999;border-radius:50%;border-right-color:transparent;box-shadow:1px 1px 1px #fff;content:'';-webkit-animation:swal2-rotate-loading 1.5s linear 0s infinite normal;animation:swal2-rotate-loading 1.5s linear 0s infinite normal}.swal2-popup .swal2-styled{margin:.3125em;padding:.625em 2em;font-weight:500;box-shadow:none}.swal2-popup .swal2-styled:not([disabled]){cursor:pointer}.swal2-popup .swal2-styled.swal2-confirm{border:0;border-radius:.25em;background:initial;background-color:#3085d6;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled.swal2-cancel{border:0;border-radius:.25em;background:initial;background-color:#aaa;color:#fff;font-size:1.0625em}.swal2-popup .swal2-styled:focus{outline:0;box-shadow:0 0 0 2px #fff,0 0 0 4px rgba(50,100,150,.4)}.swal2-popup .swal2-styled::-moz-focus-inner{border:0}.swal2-popup .swal2-footer{justify-content:center;margin:1.25em 0 0;padding:1em 0 0;border-top:1px solid #eee;color:#545454;font-size:1em}.swal2-popup .swal2-image{max-width:100%;margin:1.25em auto}.swal2-popup .swal2-close{position:absolute;top:0;right:0;justify-content:center;width:1.2em;height:1.2em;padding:0;transition:color .1s ease-out;border:none;border-radius:0;outline:initial;background:0 0;color:#ccc;font-family:serif;font-size:2.5em;line-height:1.2;cursor:pointer;overflow:hidden}.swal2-popup .swal2-close:hover{-webkit-transform:none;transform:none;color:#f27474}.swal2-popup>.swal2-checkbox,.swal2-popup>.swal2-file,.swal2-popup>.swal2-input,.swal2-popup>.swal2-radio,.swal2-popup>.swal2-select,.swal2-popup>.swal2-textarea{display:none}.swal2-popup .swal2-content{justify-content:center;margin:0;padding:0;color:#545454;font-size:1.125em;font-weight:300;line-height:normal;z-index:1;word-wrap:break-word}.swal2-popup #swal2-content{text-align:center}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-radio,.swal2-popup .swal2-select,.swal2-popup .swal2-textarea{margin:1em auto}.swal2-popup .swal2-file,.swal2-popup .swal2-input,.swal2-popup .swal2-textarea{width:100%;transition:border-color .3s,box-shadow .3s;border:1px solid #d9d9d9;border-radius:.1875em;font-size:1.125em;box-shadow:inset 0 1px 1px rgba(0,0,0,.06);box-sizing:border-box}.swal2-popup .swal2-file.swal2-inputerror,.swal2-popup .swal2-input.swal2-inputerror,.swal2-popup .swal2-textarea.swal2-inputerror{border-color:#f27474!important;box-shadow:0 0 2px #f27474!important}.swal2-popup .swal2-file:focus,.swal2-popup .swal2-input:focus,.swal2-popup .swal2-textarea:focus{border:1px solid #b4dbed;outline:0;box-shadow:0 0 3px #c4e6f5}.swal2-popup .swal2-file::-webkit-input-placeholder,.swal2-popup .swal2-input::-webkit-input-placeholder,.swal2-popup .swal2-textarea::-webkit-input-placeholder{color:#ccc}.swal2-popup .swal2-file:-ms-input-placeholder,.swal2-popup .swal2-input:-ms-input-placeholder,.swal2-popup .swal2-textarea:-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::-ms-input-placeholder,.swal2-popup .swal2-input::-ms-input-placeholder,.swal2-popup .swal2-textarea::-ms-input-placeholder{color:#ccc}.swal2-popup .swal2-file::placeholder,.swal2-popup .swal2-input::placeholder,.swal2-popup .swal2-textarea::placeholder{color:#ccc}.swal2-popup .swal2-range input{width:80%}.swal2-popup .swal2-range output{width:20%;font-weight:600;text-align:center}.swal2-popup .swal2-range input,.swal2-popup .swal2-range output{height:2.625em;margin:1em auto;padding:0;font-size:1.125em;line-height:2.625em}.swal2-popup .swal2-input{height:2.625em;padding:0 .75em}.swal2-popup .swal2-input[type=number]{max-width:10em}.swal2-popup .swal2-file{font-size:1.125em}.swal2-popup .swal2-textarea{height:6.75em;padding:.75em}.swal2-popup .swal2-select{min-width:50%;max-width:100%;padding:.375em .625em;color:#545454;font-size:1.125em}.swal2-popup .swal2-checkbox,.swal2-popup .swal2-radio{align-items:center;justify-content:center}.swal2-popup .swal2-checkbox label,.swal2-popup .swal2-radio label{margin:0 .6em;font-size:1.125em}.swal2-popup .swal2-checkbox input,.swal2-popup .swal2-radio input{margin:0 .4em}.swal2-popup .swal2-validation-message{display:none;align-items:center;justify-content:center;padding:.625em;background:#f0f0f0;color:#666;font-size:1em;font-weight:300;overflow:hidden}.swal2-popup .swal2-validation-message::before{display:inline-block;width:1.5em;min-width:1.5em;height:1.5em;margin:0 .625em;border-radius:50%;background-color:#f27474;color:#fff;font-weight:600;line-height:1.5em;text-align:center;content:'!';zoom:normal}@supports (-ms-accelerator:true){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@media all and (-ms-high-contrast:none),(-ms-high-contrast:active){.swal2-range input{width:100%!important}.swal2-range output{display:none}}@-moz-document url-prefix(){.swal2-close:focus{outline:2px solid rgba(50,100,150,.4)}}.swal2-icon{position:relative;justify-content:center;width:5em;height:5em;margin:1.25em auto 1.875em;border:.25em solid transparent;border-radius:50%;line-height:5em;cursor:default;box-sizing:content-box;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;zoom:normal}.swal2-icon-text{font-size:3.75em}.swal2-icon.swal2-error{border-color:#f27474}.swal2-icon.swal2-error .swal2-x-mark{position:relative;flex-grow:1}.swal2-icon.swal2-error [class^=swal2-x-mark-line]{display:block;position:absolute;top:2.3125em;width:2.9375em;height:.3125em;border-radius:.125em;background-color:#f27474}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=left]{left:1.0625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-error [class^=swal2-x-mark-line][class$=right]{right:1em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-icon.swal2-warning{border-color:#facea8;color:#f8bb86}.swal2-icon.swal2-info{border-color:#9de0f6;color:#3fc3ee}.swal2-icon.swal2-question{border-color:#c9dae1;color:#87adbd}.swal2-icon.swal2-success{border-color:#a5dc86}.swal2-icon.swal2-success [class^=swal2-success-circular-line]{position:absolute;width:3.75em;height:7.5em;-webkit-transform:rotate(45deg);transform:rotate(45deg);border-radius:50%}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=left]{top:-.4375em;left:-2.0635em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:3.75em 3.75em;transform-origin:3.75em 3.75em;border-radius:7.5em 0 0 7.5em}.swal2-icon.swal2-success [class^=swal2-success-circular-line][class$=right]{top:-.6875em;left:1.875em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);-webkit-transform-origin:0 3.75em;transform-origin:0 3.75em;border-radius:0 7.5em 7.5em 0}.swal2-icon.swal2-success .swal2-success-ring{position:absolute;top:-.25em;left:-.25em;width:100%;height:100%;border:.25em solid rgba(165,220,134,.3);border-radius:50%;z-index:2;box-sizing:content-box}.swal2-icon.swal2-success .swal2-success-fix{position:absolute;top:.5em;left:1.625em;width:.4375em;height:5.625em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg);z-index:1}.swal2-icon.swal2-success [class^=swal2-success-line]{display:block;position:absolute;height:.3125em;border-radius:.125em;background-color:#a5dc86;z-index:2}.swal2-icon.swal2-success [class^=swal2-success-line][class$=tip]{top:2.875em;left:.875em;width:1.5625em;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.swal2-icon.swal2-success [class^=swal2-success-line][class$=long]{top:2.375em;right:.5em;width:2.9375em;-webkit-transform:rotate(-45deg);transform:rotate(-45deg)}.swal2-progresssteps{align-items:center;margin:0 0 1.25em;padding:0;font-weight:600}.swal2-progresssteps li{display:inline-block;position:relative}.swal2-progresssteps .swal2-progresscircle{width:2em;height:2em;border-radius:2em;background:#3085d6;color:#fff;line-height:2em;text-align:center;z-index:20}.swal2-progresssteps .swal2-progresscircle:first-child{margin-left:0}.swal2-progresssteps .swal2-progresscircle:last-child{margin-right:0}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep{background:#3085d6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progresscircle{background:#add8e6}.swal2-progresssteps .swal2-progresscircle.swal2-activeprogressstep~.swal2-progressline{background:#add8e6}.swal2-progresssteps .swal2-progressline{width:2.5em;height:.4em;margin:0 -1px;background:#3085d6;z-index:10}[class^=swal2]{-webkit-tap-highlight-color:transparent}.swal2-show{-webkit-animation:swal2-show .3s;animation:swal2-show .3s}.swal2-show.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-hide{-webkit-animation:swal2-hide .15s forwards;animation:swal2-hide .15s forwards}.swal2-hide.swal2-noanimation{-webkit-animation:none;animation:none}.swal2-rtl .swal2-close{right:auto;left:0}.swal2-animate-success-icon .swal2-success-line-tip{-webkit-animation:swal2-animate-success-line-tip .75s;animation:swal2-animate-success-line-tip .75s}.swal2-animate-success-icon .swal2-success-line-long{-webkit-animation:swal2-animate-success-line-long .75s;animation:swal2-animate-success-line-long .75s}.swal2-animate-success-icon .swal2-success-circular-line-right{-webkit-animation:swal2-rotate-success-circular-line 4.25s ease-in;animation:swal2-rotate-success-circular-line 4.25s ease-in}.swal2-animate-error-icon{-webkit-animation:swal2-animate-error-icon .5s;animation:swal2-animate-error-icon .5s}.swal2-animate-error-icon .swal2-x-mark{-webkit-animation:swal2-animate-error-x-mark .5s;animation:swal2-animate-error-x-mark .5s}@-webkit-keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@keyframes swal2-rotate-loading{0%{-webkit-transform:rotate(0);transform:rotate(0)}100%{-webkit-transform:rotate(360deg);transform:rotate(360deg)}}@media print{body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown){overflow-y:scroll!important}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown)>[aria-hidden=true]{display:none}body.swal2-shown:not(.swal2-no-backdrop):not(.swal2-toast-shown) .swal2-container{position:initial!important}}</style><style type="text/css">.styles__sound_icon___23DuG
    {
  cursor: pointer;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
}
.styles__sound_icon___23DuG svg{
  width: 2rem;
  height: 2rem;
}
.styles__sound_icon_auto_width___EVA69 svg{
  width: auto;
  height: auto;
}
.styles__sound_icon___23DuG svg path{
  -webkit-transition: fill .5s;
  transition: fill .5s;
}
.styles__sound_active___2_Hr_ svg path{
  fill: #7AC70C;
}
</style>
<style type="text/css">#tudienjp * :not(svg,path){all:revert}#tudienjp svg{width:auto!important}#tudienjp{font-size:18px!important;font-family:Arial,ヒラギノ角ゴ Pro W3,Hiragino Kaku Gothic Pro,Osaka,メイリオ,Meiryo,ＭＳ Ｐゴシック,MS PGothic,sans-serif!important;color:#000!important;line-height:1.5!important;text-align:left!important}#tudienjp .o-result-item{line-height:1.5;display:block;margin-right:0;cursor:pointer}#tudienjp .o-result-item:hover{border-color:#c6d6ef!important}#tudienjp .o-selected-result{max-height:300px;overflow-y:scroll}#tudienjp .o-selected-result::-webkit-scrollbar{width:13px}#tudienjp .o-selected-result::-webkit-scrollbar-thumb{border-radius:10px;-webkit-box-shadow:inset 3px 0 0 3px #fff;background:rgba(0,0,0,.2)}#tudienjp .o-pop-nav div{font-size:14px;padding:3.2px 8px}#tudienjp .o-pop-speak{margin-top:5px;margin-right:8px;font-size:16px;cursor:pointer}#tudienjp .o-search-mobile{z-index:99998;position:absolute;display:none}#tudienjp .o-popup-tag{z-index:99999;position:absolute;display:none;padding:10px 5px 10px 10px}#tudienjp .o-bg-white{background-color:#fff!important}#tudienjp .o-border{border:1px solid #dee2e6!important}#tudienjp .o-rounded{border-radius:4px!important}#tudienjp .o-shadow{box-shadow:0 8px 16px rgba(0,0,0,.15)!important}#tudienjp .o-btn-close{box-sizing:content-box;width:16px;height:16px;padding:4px 4px;color:#000;background:transparent url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3E%3Cpath d='M.293.293a1 1 0 011.414 0L8 6.586 14.293.293a1 1 0 111.414 1.414L9.414 8l6.293 6.293a1 1 0 01-1.414 1.414L8 9.414l-6.293 6.293a1 1 0 01-1.414-1.414L6.586 8 .293 1.707a1 1 0 010-1.414z'/%3E%3C/svg%3E") 50%/16px auto no-repeat;border:0;border-radius:4px;opacity:.5;cursor:pointer}#tudienjp .o-btn-close:hover{opacity:.75}#tudienjp .o-me-1{margin-right:4px!important}#tudienjp .o-end-0{right:0!important}#tudienjp .o-top-0{top:0!important}#tudienjp .o-position-absolute{position:absolute!important}#tudienjp ul{padding-left:32px;display:block;list-style-type:disc;-webkit-margin-before:16px;margin-block-start:16px;-webkit-margin-after:16px;margin-block-end:16px;-webkit-margin-start:0;margin-inline-start:0;-webkit-margin-end:0;margin-inline-end:0;-webkit-padding-start:40px;padding-inline-start:40px}#tudienjp .o-pt-1{padding-top:4px!important}#tudienjp .mark,#tudienjp mark{padding:0!important;background-color:#ffffe0!important}#tudienjp .o-mt-1{margin-top:4px!important}#tudienjp .o-p-2{padding:8px!important}#tudienjp .o-mb-1{margin-bottom:4px!important}#tudienjp .o-border-3{border-width:3px!important}#tudienjp .o-text-secondary{color:#6c757d!important}#tudienjp .o-text-primary{cursor:pointer;color:#0d6efd}#tudienjp .o-text-primary:hover{text-decoration:underline}#tudienjp .o-w-100{width:100%!important}#tudienjp .o-link-danger{color:#dc3545}#tudienjp .o-link-danger:hover{color:#0d6efd}#tudienjp .o-link-ah:hover{color:#dc3545}#tudienjp .o-text-decoration-none{text-decoration:none!important}#tudienjp .o-fs-6,#tudienjp .o-small{font-size:16px!important}#tudienjp .o-ms-1{margin-left:4px!important}#tudienjp .o-mt-2{margin-top:8px!important}#tudienjp .o-float-start{float:left!important}#tudienjp label{display:inline-block}#tudienjp .o-float-end{float:right!important}#tudienjp .o-link-secondary{color:#6c757d!important}#tudienjp .o-result-item .o-inflect{font-size:14px;color:#666;overflow:hidden;text-overflow:ellipsis}#tudienjp .o-nav-tabs{border-bottom:1px solid #dee2e6}#tudienjp .o-nav{display:flex;flex-wrap:wrap;padding-left:0;margin-bottom:0;list-style:none}#tudienjp ul{margin-top:0;margin-bottom:16px}#tudienjp li{display:list-item;text-align:-webkit-match-parent}#tudienjp .o-nav-tabs .o-nav-item.show .o-nav-link,#tudienjp .o-nav-tabs .o-nav-link.active{color:#495057;background-color:#fff;border-color:#dee2e6 #dee2e6 #fff}#tudienjp .o-nav-link{display:block;padding:8px 16px;color:#0d6efd;text-decoration:none;transition:color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out;cursor:pointer}#tudienjp .o-nav-tabs .o-nav-link{margin-bottom:-1px;background:0 0;border:1px solid transparent;border-top-left-radius:4px;border-top-right-radius:4px;line-height:1.5}#tudienjp svg:not(:host).o-svg-inline--fa,#tudienjp svg:not(:root).o-svg-inline--fa{overflow:visible;box-sizing:content-box}#tudienjp .o-svg-inline--fa{display:inline-block;height:16px;overflow:visible;vertical-align:-2px}#tudienjp .o-form-check{font-size:16px;font-weight:400;line-height:1.5;color:#212529;-webkit-text-size-adjust:100%;-webkit-tap-highlight-color:transparent;box-sizing:border-box;display:block;min-height:1.5rem;padding-left:1.5em;margin-bottom:0}#tudienjp .o-form-check-input{box-sizing:border-box;margin:0;font-family:inherit;font-size:inherit;line-height:inherit;width:1em;height:1em;margin-top:.25em;vertical-align:top;background-color:#fff;background-repeat:no-repeat;background-position:50%;background-size:contain;border:1px solid rgba(0,0,0,.25);-webkit-appearance:none;-moz-appearance:none;appearance:none;-webkit-print-color-adjust:exact;float:left;margin-left:-1.5em;border-radius:.25em}#tudienjp .o-form-check-input:before{content:""}#tudienjp .o-form-check-input:checked[type=checkbox]{background-color:#0d6efd;border-color:#0d6efd;background-image:url("data:image/svg+xml;charset=utf-8,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3E%3Cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3 6-6'/%3E%3C/svg%3E")}#tudienjp del{color:#6c757d!important}</style><style id="mttstyle">
    #mttContainer {
      left: 0 !important;
      top: 0 !important;
      position: fixed !important;
      z-index: 100000200 !important;
      width: 1000px !important;
      margin-left: -500px !important;
      background-color: #00000000  !important;
      pointer-events: none !important;
    }
    .bootstrapiso .tooltip {
      width:auto  !important;
      height:auto  !important;
      background:transparent  !important;
      border:none !important;
      border-radius: 0px !important;
      visibility: visible  !important;
      pointer-events: none !important;
    }
    .bootstrapiso .tooltip-inner {
      font-size: 14px  !important;
      max-width: 200px  !important;
      text-align: center !important;
      backdrop-filter: blur(15px)  !important; 
      background-color: #e6f9ff !important;
      color: #000 !important;
      border-radius: .25rem !important;
      pointer-events: none !important;
    }
    .bootstrapiso .arrow::before {
      border-top-color: #b3ecff !important;
      border-bottom-color: #b3ecff !important;
    }
    </style><style>
      .ejoy-sub-active{
        color: #1296ba !important;
      }
      
      .ejoy-sub-hovered{
        color: #1296ba !important;
      }
      .ejoy-sub-clzz{
        cursor: pointer;
        
        line-Height: 1.2;
          font-size: 28px;
          color: #FFCC00; background: rgba(17, 17, 17, 0.7);
        
      }
      .ejoy-sub-clzz:hover{
        color: #1296ba !important;
      }
      .ej-trans-sub{
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999999;
        cursor: move;
      }
      .ej-trans-sub > span{
        color: #3CF9ED;
        font-size: 18px;
        text-align: center;
        padding: 0 16px;
        line-height: 1.5;
        background: rgba(32, 26, 25, 0.8);
        text-shadow: 0px 1px 4px black;
        padding: 0 8px;
        
        line-height: 1.2;
        font-size: 16px;
        color: #0CB1C7; background: rgba(67, 65, 65, 0.7);
      
      }
      .ej-full-screen-video{
        position: absolute;
        width: 30px;
        height: 30px;
        top: 30px;
        right: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 99999999;
        cursor: pointer;
      }
      .ej-main-sub{
        position: absolute;
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 99999999;
        cursor: move;
        padding: 0 8px;
      }
      .ej-main-sub > span{
        color: white;
        font-size: 20px;
        line-height: 1.5;
        text-align: center;
        background: rgba(32, 26, 25, 0.8);
        padding: 2px 8px;
        
        line-Height: 1.2;
          font-size: 28px;
          color: #FFCC00; background: rgba(17, 17, 17, 0.7);
        
      }

      .ej-main-sub .ejoy-sub-clzz{
        background: transparent !important
      }

      .tran-subtitle > span{
        cursor: pointer;
        padding-left: 10px;
        top: 2px;
        position: relative;
      }

      .tran-subtitle > span > span{
        position: absolute;
        top: -170%;
        background: rgba(0,0,0,0.5);
        font-size: 13px;
        line-height: 20px;
        padding: 2px 8px;
        color: white;
        display: none;
        border-radius: 4px;
        white-space: nowrap;
        left: -50%;
        font-weight: normal;
      }

      .viewPopupPro {
        z-index: 2147483647;
        cursor: auto;
        position: absolute;
        z-index: 2147483647;
        background: #111111;
        transition: opacity 1s;
        width: 172px;
        height: 66px;
        opacity: 1;
        border-radius: 6px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

      .titlePopupPro {
        font-style: normal;
        font-weight: 400;
        font-size: 10px;
        line-height: 12px;
        color: #E5E5E5;
        text-shadow: 0px 3px 3px rgba(0, 0, 0, 0.25);
      }
  
      .viewGoPro {
        background: #FFCC00;
        border-radius: 72.6257px;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top: 8px;
        padding-left: 10px;
        cursor: pointer;
  
      }

      .viewGoPro svg {
        pointer-events: none;
      }
      
      .textGoPro {
        font-style: normal;
        font-weight: 600;
        font-size: 10px;
        line-height: 12px;
        pointer-events: none;
        text-align: center;
        color: #FFFFFF;
        padding: 4px 14px 4px 4px;
      }

      .viewPopupPro{
        top: auto !important;
        bottom: 15px !important;
      }

      .view-icon-copy-main-sub:hover > span,
      .view-icon-edit-sub:hover > span,
      .view-icon-exit-full-sub:hover > span,
      .view-icon-full-sub:hover > span,
      .iconCrownGoPro:hover > span,
      .view-icon-copy-tran-sub:hover > span {
        display: block;
      }

      .iconCrownGoPro{
        padding-left: 0px !important;
        padding-right: 8px !important;
      }
      .iconCrownGoPro svg{
        width: 17px;
        height: 17px;
      }
      .view-icon-full-sub, .view-icon-exit-full-sub {
        display: flex;
      }

      .view-icon-full-sub > svg, .view-icon-exit-full-sub > svg {
        pointer-events: none;
      }

      .tran-subtitle > span > svg{
        width: 16px;
        height: 16px;
        pointer-events: none;
        display: inline-flex !important;
        vertical-align: baseline !important;
      }
      
      .view-icon-copy-main-sub > svg{
        pointer-events: none;
        color: #FFCC00
      }

      .iconCrownGoPro{
        padding-left: 0 !important;
        padding-right: 8px !important;
      }
      .view-icon-copy-tran-sub > svg{
        pointer-events: none;
        color: #0CB1C7
      }

      </style>
      </head>
  <body class="text-center" data-new-gr-c-s-check-loaded="14.1063.0" data-gr-ext-installed="">
  
  <<form class="form-signin" method="POST" action="login.php">
        <img class="mb-4" src="./images/LogoLoTus1.png" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
        
        <?php
        if (isset($_SESSION['error'])) {
            echo '<div class="alert alert-danger" role="alert">' . $_SESSION['error'] . '</div>';
            unset($_SESSION['error']); // Xóa thông báo lỗi sau khi hiển thị
        }
        ?>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
        
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        
        <button class="btn btn-lg btn-primary btn-block" type="submit">Đăng nhập</button>
        <button class="btn btn-lg btn-primary btn-block" type="button" onclick="window.location.href='signup.php'">Đăng ký</button>
    </form>


<div id="tudienjp"><div class="o-search-mobile" style="top: 0px; left: 0px; display: none;"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="32px" height="32px" viewBox="0 0 40 40" version="1.1"><g id="surface1"><path d="M 39.085938 34.664062 L 29.734375 25.3125 C 31.859375 22.15625 32.910156 18.210938 32.347656 14.007812 C 31.390625 6.859375 25.53125 1.039062 18.375 0.132812 C 7.734375 -1.210938 -1.210938 7.734375 0.132812 18.375 C 1.039062 25.535156 6.859375 31.398438 14.007812 32.351562 C 18.210938 32.914062 22.15625 31.863281 25.3125 29.738281 L 34.664062 39.089844 C 35.886719 40.308594 37.863281 40.308594 39.085938 39.089844 C 40.304688 37.867188 40.304688 35.882812 39.085938 34.664062 Z M 6.179688 16.25 C 6.179688 10.734375 10.664062 6.25 16.179688 6.25 C 21.695312 6.25 26.179688 10.734375 26.179688 16.25 C 26.179688 21.765625 21.695312 26.25 16.179688 26.25 C 10.664062 26.25 6.179688 21.765625 6.179688 16.25 Z M 6.179688 16.25 " style="stroke: none; fill-rule: nonzero; fill: rgb(0, 0, 0); fill-opacity: 1;"></path></g></svg></div><div class="o-popup-tag o-bg-white o-border o-rounded o-shadow" style="width: 400px; top: 0px; left: 0px; display: none;"><div><button type="button" aria-label="Close" class="btn-sm o-btn-close o-position-absolute o-top-0 o-end-0 o-mt-1 o-me-1"></button><ul role="tablist" class="o-nav o-nav-tabs o-pop-nav"><span><svg aria-hidden="true" focusable="false" data-icon="volume-high" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="o-pop-speak o-svg-inline--fa"><path fill="currentColor" d="M533.6 32.5C598.5 85.3 640 165.8 640 256s-41.5 170.8-106.4 223.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C557.5 398.2 592 331.2 592 256s-34.5-142.2-88.7-186.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM473.1 107c43.2 35.2 70.9 88.9 70.9 149s-27.7 113.8-70.9 149c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C475.3 341.3 496 301.1 496 256s-20.7-85.3-53.2-111.8c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zm-60.5 74.5C434.1 199.1 448 225.9 448 256s-13.9 56.9-35.4 74.5c-10.3 8.4-25.4 6.8-33.8-3.5s-6.8-25.4 3.5-33.8C393.1 284.4 400 271 400 256s-6.9-28.4-17.7-37.3c-10.3-8.4-11.8-23.5-3.5-33.8s23.5-11.8 33.8-3.5zM301.1 34.8C312.6 40 320 51.4 320 64V448c0 12.6-7.4 24-18.9 29.2s-25 3.1-34.4-5.3L131.8 352H64c-35.3 0-64-28.7-64-64V224c0-35.3 28.7-64 64-64h67.8L266.7 40.1c9.4-8.4 22.9-10.4 34.4-5.3z"></path></svg></span><li role="presentation" class="o-nav-item"><div data-bs-toggle="tab" aria-selected="true" class="o-nav-link active">Từ vựng</div></li><li role="presentation" class="o-nav-item"><div data-bs-toggle="tab" aria-selected="false" class="o-nav-link">Hán tự</div></li><li role="presentation" class="o-nav-item"><div data-bs-toggle="tab" aria-selected="false" class="o-nav-link">Dịch</div></li></ul><div class="o-selected-result o-pt-1"><div> Đang tìm kiếm ... </div><div class="o-fs-6 o-mt-2" style="line-height: 1.7;"><div class="o-float-start"><div class="o-form-check"><input type="checkbox" id="flexCheckTudienjpLang" class="o-form-check-input"><label for="flexCheckTudienjpLang"> Tiếng Anh </label></div></div><div class="o-float-end o-me-1"><a href="https://tudienjp.com/" target="_blank" class="o-link-secondary o-text-decoration-none">Từ điển JP</a></div></div></div></div></div></div><div id="tudienjpOff"></div><div id="mttContainer" class="bootstrapiso notranslate" data-original-title="" title="" style="transform: translate(262px, 0px);"></div><div id="eJOY__extension_root" class="eJOY__extension_root_class" style="all: unset;"><template shadowrootmode="open">
        <style>
          @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,600');
          .wrapperEjoy {
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
}

.container {
  position: absolute;
  display: none;
  z-index: 2147483647;
  color: black;
  font-size: 14px;
  /* font-family: 'Open Sans', 'sans-serif', 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; */
  font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-rendering: optimizeLegibility;
  -moz-transition: width 1s ease-in-out;
  -webkit-transition: width 1s ease-in-out;
  -moz-transition: width 1s ease-in-out;
  -o-transition: width 1s ease-in-out;
  transition: width 1s ease-in-out;
  /* transition: width 1s ease-in-out, left 1.5s ease-in-out; */
}

.container button {
  background-color: transparent;
}

.main {
  position: relative;
  /* height: 100%; */
  flex-grow: 1;
}

.main_content {
  background-color: #fff;
  min-height: 100px;
  width: 304px;
  height: 100%;
  display: flex;
  flex-direction: column;
  border-radius: 5px;
  top: 0;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-color: transparent;
  /* overflow: hidden; */
  z-index: 2;
  box-sizing: border-box;
  padding: 0 0 8px 0;
}

.view_main {
  overflow-y: auto;
  overflow-x: hidden;
}

.view_main_old {
  height: calc(100% - 55px);
  display: flex;
  flex-direction: column;
  /* overflow-y: auto; 
  overflow-x: hidden;  */
}

.icon {
  cursor: pointer;
}

.viewLoading {
  background: white;
  box-shadow: 0px 0px 4px #727272;
  width: 30px;
  height: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 5px;
}

.icon:hover {
  transform: scale(1.1);
}

.triangle {
  position: absolute;
  width: 0;
  height: 0;
  bottom: -21px;
  border-bottom: 25px solid transparent;
  border-left: 35px solid #fff;
  filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
}

.header_container {
  background-color: rgb(29, 161, 242);
  letter-spacing: -0.2px;
  font-size: 12px;
  text-align: left;
  max-height: 33px;
  line-height: normal;
  border-radius: 5px 5px 0 0;
}

.header_bar {
  background-color: transparent;
  height: 100%;
  display: flex;
  overflow: hidden;
  text-align: center;
  border-radius: 5px 5px 0 0;
}

.header_btn {
  height: 100%;
  width: 33.3%;
  color: rgb(255, 255, 255);
  background-color: transparent;
  cursor: pointer;
  padding: 8px;
}

.header_btn:hover {
  background-color: #196594;
}

.header_btn_new {
  /* height: 100%; */
  /* width: 33.3%; */
  display: flex;
  align-items: center;
  justify-content: center;
  color: rgb(255, 255, 255);
  background-color: transparent;
  cursor: pointer;
  padding: 8px;
}

.header_btn_new .clzzTooltip {
  display: none;
  position: absolute;
  top: -30px;
  white-space: nowrap;
  background: #424141b5;
  padding: 4px 12px;
  border-radius: 5px;
  font-weight: 600;
}

.header_btn_new:hover {
  background-color: #196594;
}

.header_btn_new:hover .clzzTooltipShow {
  display: block;
}

.header_last {
  padding-right: 32px; 
}

.header_close_icon_container {
  position: absolute;
  top: 11.4px;
  right: -20px;
  cursor: pointer;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #ffffff;
  box-shadow: 1px 1px 10px black;
}

.header_close_icon {
   all: unset;
  padding: 3px;
}

.header_triangle_top {
  position: absolute;
  width: 0;
  height: 0;
  bottom: -21px;
  border-bottom: 25px solid transparent;
  border-left: 35px solid #fff;
  filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
}

.word_container {
  padding: 8px 7px 8px 16px;
  line-height: 1.17;
}

.word_content {
  min-height: 28px;
  max-height: 116px;
  padding-bottom: 0px;
  display: flex;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  align-items: center;
  /* overflow-x: hidden;
  overflow-y: auto; */
}

.word_content::-webkit-scrollbar {
  width: 4px;
  border-radius: 100px;
}

.word_content::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
  border-radius: 100px;
}

.word_content::-webkit-scrollbar-thumb {
  background-color: #9f9f9f;
  outline: 1px solid #e5e5e5;
  border-radius: 100px;
}

.word_speaker_container {
  cursor: pointer;
  align-self: flex-start;
  /* margin-top: 8px; */
  opacity: 0.7;
  height: 28px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.word_speaker_container:hover {
  opacity: 1;
}

.word_word {
  min-width: 10px;
  max-width: 240px;
  font-size: 24px;
  font-weight: bold;
  letter-spacing: 1.2px;
  text-align: left;
  color: #000000;
  /* margin-left: 5px; */
}

.word_incorect {
  font-size: 12px;
  font-weight: 300;
  letter-spacing: 1.2px;
  text-align: left;
  color: #000000;
  margin-left: 5px;
}

.word_pronun {
  font-style: italic;
  margin-left: 8px;
}

.word_loading_container {
  margin-left: 20px;
  margin-top: 7px;
  overflow: hidden;
}

.word_loading {
  height: 20px;
  width: 20px;
  -webkit-animation: spin 1.5s 0.3s linear infinite;
  -moz-animation: spin 1.5s 0.3s linear infinite;
  animation: spin 1.5s linear 0.3s infinite;
}

@-moz-keyframes spin {
  100% {
    -moz-transform: rotate(360deg);
  }
}

@-webkit-keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
  }
}

@keyframes spin {
  100% {
    -webkit-transform: rotate(360deg);
    transform: rotate(360deg);
  }
}

.word_pop_symbol_container {
  position: relative;
}

.word_pop_symbol {
  width: 33px;
  height: 15px;
  background-color: #ffcc00;
  margin-left: 8px;
  transform: skewX(-25deg);
  display: flex;
  justify-content: center;
  align-items: center;
  border-radius: 2px;
}

.word_pop_symbol img {
  z-index: 1;
  transform: skewX(25deg);
}

.word_tooltip_container {
  position: fixed;
  margin-top: 14px;
  margin-left: 30px;
  opacity: 0;
  display: none;
  transition: opacity 0.3s ease;
  z-index: 1000000000000;
  background-color: #fff;
  height: 40px;
  width: 120px;
  border-radius: 5px;
  box-shadow: -1px -4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.2);
  font-size: 11px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.25;
  letter-spacing: normal;
  text-align: left;
  padding: 5px;
}

.word_tooltip_triangle {
  position: absolute;
  width: 0;
  height: 0;
  top: -14px;
  border-top: 15px solid transparent;
  border-left: 15px solid #fff;
  filter: drop-shadow(-1px -1px 1px rgba(0, 0, 0, 0.2));
}

.word_pop_symbol_container:hover .word_tooltip_container {
  opacity: 1;
  display: block
}

.word_tooltip_container p {
  margin-top: 5px;
}

.content_container {
  padding: 0 7px 0 13px;
  /* margin-bottom: 17px; */
  overflow-y: auto;
  overflow-x: hidden;
  /* max-height: 247px; */
  /* height: 200px; */
  flex-grow: 1;
}

.content_container_new_scroll {
  padding: 0 7px 0 13px;
  /* margin-bottom: 17px; */
  /* overflow-y: auto;
  overflow-x: hidden; */
  /* max-height: 247px; */
  /* height: 200px; */
  flex-grow: 1;
}

.content_container .content_inner {
  position: relative;
  min-height: 150px;
  padding-top: 5px;
  /* overflow-y: auto;
  overflow-x: hidden;
  max-height: 247px;
  height: 200px;
  flex-grow: 1; */
}

.content_inner_list {
  width: 284px;
  box-sizing: border-box;
  padding-left: 11px;
}

.content_container::-webkit-scrollbar,
.selectWbConSelect::-webkit-scrollbar,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar {
  width: 4px;
  border-radius: 100px;
}

.content_container::-webkit-scrollbar-track,
.selectWbConSelect::-webkit-scrollbar-track,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(95, 85, 85, 0.3);
  border-radius: 100px;
}

.content_container::-webkit-scrollbar-thumb,
.selectWbConSelect::-webkit-scrollbar-thumb,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar-thumb {
  background-color: #9f9f9f;
  outline: 1px solid #e5e5e5;
  border-radius: 100px;
  text-align: center;
}

.content_pos {
  color: #faa918;
  font-size: 16px;
  font-weight: 600;
  line-height: 1.17;
  letter-spacing: -0.3px;
  text-align: left;
}

.content_more_btn {
  width: 94%;
  height: 24px;
  border-radius: 16px;
  margin-top: 20px;
  background-color: #d8d8d8;
  cursor: pointer;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
}

.content_more_btn:hover {
  background-color: rgb(148, 148, 148);
}

.tran_container {
  width: 256px;
  min-height: 40px;
  border-radius: 5px;
  background-color: #d8d8d8;
  margin-top: 4px;
  margin-bottom: 4px;
}

.tran_content {
  padding: 11px 8px 12px 8px;
  display: flex;
  flex-direction: column;
}

.tran_content .tran_content_top {
  display: flex;
  margin-bottom: 8px;
  justify-content: space-between;
}

.tran_tran_content {
  display: flex;
}

.tran_tran {
  width: 77%;
  font-weight: 600;
  line-height: 1.14;
  letter-spacing: -0.2px;
  flex-grow: 1;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  text-align: left;
  color: #333333;
}

.tran_btn_add {
  all: initial;
  margin-left: 4px;
  cursor: pointer;
  width: 48px;
  height: 20px;
  float: left;
  background-color: #1da1f2;
  border-radius: 2px;
  display: flex !important;
  color: #fff;
  justify-content: space-around;
  font-family: Open Sans, sans-serif;
  align-items: center;
  font-size: 12px;
  font-weight: 300;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.33;
  letter-spacing: 0.8px;
  /* overflow: hidden; */
  text-overflow: ellipsis;
}

.tran_btn_edit {
  all: initial;
  margin-right: 10px;
  cursor: pointer;
  opacity: 0.7;
}

.tran_btn_add:hover,
.btn_edit:hover {
  transform: scale(1.1)
}

.tran_extra_data {
  width: 100%;
  font-weight: 300;
  font-size: 14px;
  line-height: 1.33;
  letter-spacing: -0.2px;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  text-align: left;
  color: #666666;
  padding-top: 2px;
  white-space: pre-wrap;
}

.tran_footer {
  display: flex;
  width: 100%;
  justify-content: flex-end;
}

.tran_vote_container {
  min-width: 88px;
  height: 16px;
  border-radius: 8px;
  background-color: #d8d8d8;
  border: solid 1px #979797;
  /* margin-left: 59%; */
  margin-bottom: -27px;
  font-size: 8px;
  font-weight: normal;
  font-style: italic;
  font-stretch: normal;
  line-height: normal;
  letter-spacing: normal;
  text-align: justify;
  color: #000000;
  /* padding: 2px 12px 2px 12px; */
  display: flex;
  justify-content: space-around;
  align-items: center;
}

.OOPS_container {
  height: 129px;
  border-radius: 5px;
  background-color: #d8d8d8;
  display: flex;
  justify-content: center;
  flex-direction: column;
  text-align: center;
}

.OOPS_img {
  align-self: center;
}

.OOPS_oops_text {
  font-size: 14px;
  font-weight: bold;
}

.OOPS_alert_text {
  font-size: 12px;
  font-family: 300;
  line-height: 1.33;
  letter-spacing: -0.2px;
}

.btnSayItCon {
  padding: 8px;
}

.btnToAdvTranslation {
  position: absolute;
  right: -32px;
  width: 32px;
  height: 32px;
  top: 33px;
  background: #ffffff;
  border-radius: 0 5px 5px 0px;
  cursor: pointer;
  box-shadow: 3px 2px 4px rgba(0, 0, 0, 0.5);
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btnSpeak {
  position: absolute;
  right: -32px;
  width: 32px;
  height: 32px;
  top: 66px;
  background: #ffffff;
  border-radius: 0 5px 5px 0px;
  cursor: pointer;
  box-shadow: 3px 2px 4px rgba(0, 0, 0, 0.5);
  padding: 0;
  display: flex;
  justify-content: center;
  align-items: center;
}

.btnGoProIconRight {
  top: 132px;
}

.btnGoSupportRight {
  top: 99px;
}

.btnSayIt {
  display: flex;
  justify-content: center;
  align-items: center;
  height: 18px;
  border-radius: 5px;
  padding: 0 4px;
  background-color: #ff7700;
  cursor: pointer;
}

.btnSayItIcon {
  display: flex;
  padding-right: 4px;
}

.btnSayItIcon svg {
  width: 12px;
  height: 12px;
}

.btnSayItText {
  font-size: 12px;
  font-weight: 600;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.3333333333333333;
  letter-spacing: normal;
  color: #ffffff;
}

.word_pron {
  margin-top: 8px;
  display: flex;
  align-items: center;
}

.custom_container {
  position: relative;
  z-index: 99999999999999999;
}

.custom_add_translation {
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.custom_input {
  flex-grow: 1;
  padding: 0px 21px 0px 0px;
}

.custom_input input {
  width: 100%;
  min-height: 35px;
  border-radius: 5px;
  background-color: #d8d8d8;
  border: none;
  font-weight: 600;
  line-height: 1.14;
  letter-spacing: -0.2px;
  flex-grow: 1;
  flex-wrap: wrap;
  overflow-wrap: break-word;
  text-align: left;
  color: #000000;
  font-size: 14px;
  padding: 0 8px;
}

.custom_content {
  flex-grow: 1;
}

.icon_plus {
  cursor: pointer;
  display: flex;
}

.icon_plus svg {
  width: 16px;
  height: 16px;
}

.hidden {
  display: none;
}

.tooltip_custom_add {
  position: absolute;
  /* display: none; */
}

/* tool tip */

[tooltip] {
  position: relative;
  display: inline-block;
}

[tooltip]::before {
  content: "";
  position: absolute;
  top: -7px;
  left: 50%;
  transform: translateX(-50%);
  border-width: 5px 6px 0 6px;
  border-style: solid;
  border-color: #808080 transparent transparent transparent;
  /* border-color: rgba(0,0,0,0.7) transparent transparent transparent; */
  z-index: 99;
  opacity: 0;
}

[tooltip-position='left']::before {
  left: 0%;
  top: 50%;
  margin-left: -12px;
  transform: translatey(-50%) rotate(-90deg)
}

[tooltip-position='top-left']::before {
  left: 90%;
}

[tooltip-position='top-right']::before {
  left: 14%;
}

[tooltip-position='top']::before {
  left: 50%;
}

[tooltip-position='buttom']::before {
  top: 100%;
  margin-top: 8px;
  transform: translateX(-50%) translatey(-100%) rotate(-180deg)
}

[tooltip-position='right']::before {
  left: 100%;
  top: 50%;
  margin-left: 1px;
  transform: translatey(-50%) rotate(90deg)
}

[tooltip]::after {
  content: attr(tooltip);
  position: absolute;
  left: 50%;
  top: -6px;
  transform: translateX(-50%) translateY(-100%);
  /* background: rgba(0,0,0,0.7); */
  background: #808080;
  text-align: center;
  color: #fff;
  padding: 4px 2px;
  font-size: 10px;
  min-width: 180px;
  border-radius: 5px;
  pointer-events: none;
  padding: 4px 4px;
  z-index: 99;
  opacity: 0;
  white-space: pre-wrap;
}

[tooltip-position='left']::after {
  left: 0%;
  top: 50%;
  margin-left: -8px;
  transform: translateX(-100%) translateY(-50%);
}

[tooltip-position='top']::after {
  left: 50%;
}

[tooltip-position='top-left']::after {
  left: -90%;
}

[tooltip-position='top-right']::after {
  left: 90%;
}

[tooltip-position='buttom']::after {
  top: 100%;
  margin-top: 8px;
  transform: translateX(-50%) translateY(0%);
}

[tooltip-position='right']::after {
  left: 100%;
  top: 50%;
  margin-left: 8px;
  transform: translateX(0%) translateY(-50%);
}

[tooltip]:hover::after,
[tooltip]:hover::before {
  opacity: 1
}

.selectWbCon {
  /* filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
  display: flex;
  justify-content: flex-end;
  position: relative;
  align-items: center;
  padding: 8px 8px 0 8px;
  font-size: 12px;
  color: #666666;
}

.selectWbConLeft {
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  cursor: pointer;
  color: #666666;
  align-items: center;
  padding-right: 4px;
}

.selectWbConRight {
  font-style: normal;
  font-weight: 600;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  cursor: pointer;
  color: #666666;
  align-items: center;
  padding-right: 3px;
  white-space: nowrap;
}

.selectWbIcon {
  display: flex;
  cursor: pointer;
}

.selectWbConSelect {
  position: absolute;
  bottom: 31px;
  visibility: hidden;
  background: white;
  /* height: 300px; */
  z-index: 999;
  min-width: 200px;
  max-width: 300px;
  max-height: 300px;
  overflow: auto;
  filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;
}

.selectWbConSelect.isShow {
  visibility: visible;
}

.selectWbConSelect.hidden {
  visibility: hidden;
}

.itemOptionSelectWb {
  cursor: pointer;
  padding: 6px 8px;
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  color: #666666;
  align-items: center;
}

.itemOptionSelectWb.active {
  color: #1da1f2
}

.itemOptionSelectWb:hover {
  background: #1da1f2;
  color: white;
}

.selectWb {
  border: none;
  font-size: 14px;
  font-weight: 400;
  color: #666666;
  background: transparent;
}

/* start icon level */

.viewIconFilter {
  display: flex;
  justify-content: center;
  align-items: center;
}

.iconFilter {
  width: 24px;
  height: 23px;
  background: #1DA1F2;
  -webkit-mask-size: cover;
  mask-size: cover;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-right: 8px;
}

.iconFilter span {
  font-size: 12px;
  line-height: 1.2;
  align-items: center;
  font-weight: bold;
  color: #FFFFFF;
}

.nameFilter {
  font-style: normal;
  font-weight: 600;
  font-size: 14px;
  line-height: 16px;
  display: flex;
  align-items: center;
  color: #333333;
}

/* end icon level */

/* start popup go to pro */

.iconItemGoPro svg {
  width: 38px;
  transition: all 0.5s;
}

.iconItemGoPro path {
  fill: #B2B2B2;
  transition: all 0.5s;
}

.iconItemGoProActive svg {
  width: 56px;
}

.iconItemGoProActive path {
  fill: #1DA1F2;
}

/* end popup go to pro */

.switch {
  position: relative;
  display: inline-block;
  cursor: pointer;
  width: 30px;
  height: 17px;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: background-color 0.4s, transform 0.4s;
  -moz-transition: background-color 0.4s, transform 0.4s;
  -ms-transition: background-color 0.4s, transform 0.4s;
  -o-transition: background-color 0.4s, transform 0.4s;
  transition: background-color 0.4s, transform 0.4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 13px;
  width: 13px;
  left: calc(13px / 6.5);
  bottom: calc(13px / 6.5);
  background-color: #ffffff;
  -webkit-transition: background-color 0.4s, transform 0.4s;
  -moz-transition: background-color 0.4s, transform 0.4s;
  -ms-transition: background-color 0.4s, transform 0.4s;
  -o-transition: background-color 0.4s, transform 0.4s;
  transition: background-color 0.4s, transform 0.4s;
}

.round {
  border-radius: 30px;
}

.round:before {
  border-radius: 50%;
}

.active .slider {
  background-color: #1da1f2;
}

.active .slider:before {
  -webkit-transform: translateX(13px);
  -ms-transform: translateX(13px);
  transform: translateX(13px);
}

.view_main::-webkit-scrollbar,
.selectWbConSelect::-webkit-scrollbar,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar {
  width: 4px;
  border-radius: 100px;
}

.view_main::-webkit-scrollbar-track,
.selectWbConSelect::-webkit-scrollbar-track,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar-track {
  -webkit-box-shadow: inset 0 0 6px rgba(95, 85, 85, 0.3);
  border-radius: 100px;
}

.view_main::-webkit-scrollbar-thumb,
.selectWbConSelect::-webkit-scrollbar-thumb,
.selectWbConSelect .selectWbConSelectMain::-webkit-scrollbar-thumb {
  background-color: #9f9f9f;
  /* outline: 1px solid #e5e5e5; */
  border-radius: 100px;
  text-align: center;
}

.scale-animation {
  height: 20px;
  width: 20px;
  -webkit-animation: scale-infi 1.5s 0.3s linear infinite;
  -moz-animation: scale-infi 1.5s 0.3s linear infinite;
  animation: scale-infi 1.5s linear 0.3s infinite;
}

@-moz-keyframes scale-infi {
  0% {
    -webkit-transform: scale(1);
    transform: rotate(1);
  }

  50% {
    -webkit-transform: scale(1.5);
    transform: rotate(1.5);
  }
}

@-webkit-keyframes scale-infi {
  0% {
    -webkit-transform: scale(1);
    transform: rotate(1);
  }

  50% {
    -webkit-transform: scale(1.5);
    transform: rotate(1.5);
  }
}

@keyframes scale-infi {
  0% {
    -webkit-transform: scale(1);
    transform: rotate(1);
  }

  50% {
    -webkit-transform: scale(1.5);
    transform: rotate(1.5);
  }
}

.notify_onboarding_container {
  position: absolute;
  width: 272px;
  min-height: 65px;
  flex-direction: column;
  left: 16px;
  padding-bottom: 8px;
  display: flex;
  align-items: center;
  bottom: 45px;
  text-align: center;
  background: #FFFFFF;
  box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.2);
  border-radius: 5px;
  border: 1px solid #1DA1F2;
}

.notify_onboarding_close {
  display: flex;
  cursor: pointer;
  align-self: self-end;
  justify-content: flex-end;
}

.notify_onboarding_close>svg {
  padding: 10px 10px 0 0;
}

.notify_onboarding_title {
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  padding: 0 16px;
  line-height: 16px;
  color: #333333;
}

.notify_onboarding_btn {
  display: flex;
  justify-content: center;
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  display: flex;
  align-items: center;
  padding: 6px 24px;
  line-height: 14px;
  cursor: pointer;
  background: #1DA1F2;
  color: white;
  border-radius: 72.6px;
  margin-top: 10px;
  margin-bottom: 10px;
}

.notify_onboarding_btn>span {
  padding-left: 8px;
}

.notify_onboarding_arrow {
  position: absolute;
  bottom: -21px;
  left: 0px;
}

[class*="icono"] {
  position: relative;
  display: inline-block;
  vertical-align: middle;
  color: #C4C4C4;
  box-sizing: border-box;
}

[class*="icono-white"] {
  color: white;
}

[class*="icono"]:after,
[class*="icono"]:before {
  content: "";
  box-sizing: border-box;
}

[class*="icono-arrow4"] {
  width: 0;
  height: 0;
  border: 7px solid transparent;
  border-top: 7px solid;
  border-right: 7px solid;
  margin: 15px;
}

[class*="icono-arrow4"][class*="-left"] {
  transform: rotate(45deg);
}

[class*="icono-arrow4"][class*="-left"][class*="-up"] {
  transform: none;
}

[class*="icono-arrow4"][class*="-left"][class*="-down"] {
  transform: rotate(90deg);
}

[class*="icono-arrow4"][class*="-right"] {
  transform: rotate(-135deg);
}

[class*="icono-arrow4"][class*="-right"][class*="-up"] {
  transform: rotate(-90deg);
}

[class*="icono-arrow4"][class*="-right"][class*="-down"] {
  transform: rotate(180deg);
}

[class*="icono-arrow4"][class*="-up"] {
  transform: rotate(-45deg);
}

[class*="icono-arrow4"][class*="-down"] {
  transform: rotate(135deg);
}


.searchMeaningGg_container {
  /* background: #D8D8D8; */
  border-radius: 4px;
  padding: 8px 0px;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.searchMeaningGg_text {
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 16px;
  cursor: pointer;
  /* display: flex;
  align-items: center; */
  /* text-align: center; */
}

.searchMeaningGg_text span {
  color: #1DA1F2;
}

.searchMeaningGg_btn {
  /* background: #1DA1F2; */
  border-radius: 100px;
  padding: 8px 36px;
  margin-top: 16px;
  font-style: normal;
  font-size: 14px;
  line-height: 16px;
  text-align: center;
  color: #1DA1F2;
  cursor: pointer;
}



.view_similar {
  display: flex;
  flex-wrap: wrap;
}

.view_similar .imilar_text {
  font-style: normal;
  font-weight: 400;
  font-size: 10px;
  line-height: 16px;
  display: flex;
  padding-right: 10px;
  align-items: center;
  text-align: center;
  color: #397447;
}

.view_similar .imilar_item {
  background-color: #fff;
  border: 1px solid #dadce0;
  line-height: 16px;
  font-size: 9px;
  margin: 3px 0px;
  padding: 0 10px;
  margin-right: 4px;
  border-radius: 32px;
  float: left;
  max-width: 250px;
  cursor: pointer;
  position: relative;
  overflow: hidden;
  text-align: center;
  text-overflow: ellipsis;
  white-space: nowrap;
  color: #3c4043;
}

.view_similar .imilar_item.imilar_item_disable {
  cursor: text;
  color: #bdc1c6 !important;
  cursor: default;
  background-color: #f1f3f4;
  border: 1px solid #f8f9fa;
}

.google_Dictionary_title {
  background: #E6E7EB;
  font-style: normal;
  font-weight: 500;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  align-items: center;
  letter-spacing: 0.05em;
  text-transform: uppercase;
  color: #3B3C40;
  padding: 4px 9px;
}

.google_Dictionary_desc {
  font-style: normal;
  font-weight: 400;
  font-size: 10px;
  line-height: 16px;
  cursor: pointer;
  display: flex;
  align-items: center;
  text-align: center;
  color: #626262;
  padding-top: 8px;
  padding-bottom: 4px;
}

.google_Dictionary_pharse {
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #8C8C8C;
  padding-bottom: 4px;
  padding-left: 26px;
}

.google_Dictionary_content_pos {
  text-align: left;
  font-style: italic;
  font-weight: 400;
  font-size: 12px;
  line-height: 20px;
  color: #8C8C8C;
}

.google_Dictionary_pharse_link {
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 16px;
  cursor: pointer;
  display: flex;
  align-items: center;
  text-align: center;
  color: #0F59C5;
  padding-left: 4px;
}

.dataGetMeaningEmpty {
  background: #D8D8D8;
  border-radius: 4px;
  font-style: normal;
  font-weight: 400;
  font-size: 12px;
  line-height: 16px;
  color: #3B3C40;
  width: '100%';
  min-width: 124px;
  min-height: 124px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  text-align: center;
}

.dataGetMeaningEmpty span {
  padding: 16px 11px 0px;
}

.item_lookup_container {
  min-height: 34px;
  display: flex;
  flex-direction: row;
  padding: 8px 12px;
  align-items: center;
  cursor: pointer;
}

.item_lookup_logo {
  height: 34px;
  width: 34px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #11A37F;
}

.item_lookup_logo_small {
  height: 16px;
  width: 16px;
  border-radius: 3px;
  font-weight: 600;
}

.item_lookup_logo_bg_none {
  background-color: transparent;
}

.item_lookup_logo img {
  height: 34px;
  width: 34px;
}

.item_lookup_logo_small svg {
  height: 10px;
  width: 10px;
}

.item_lookup_logo svg path {
  fill: white
}


.item_lookup_text {
  font-style: normal;
  font-weight: 400;
  font-size: 14px;
  line-height: 20px;
  display: flex;
  align-items: center;
  color: #666666;
  flex: 1;
  padding-left: 12px;
}

.item_lookup_text_small {
  font-size: 12px;
  line-height: 16px;
  font-weight: 600;
}

.item_lookup_more {
  cursor: pointer;
  /* height: 34px;
  width: 34px;
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: #11A37F; */
}

.viewIcon {
  display: flex;
  justify-content: center;
  position: relative;
  align-items: center;
  background: white;
  border: 1px solid #1DA1F2;
  border-radius: 3px
}

.viewIcon img {
  background: #1DA1F2;
  border-radius: 1px 0px 0px 1px;
}

.itemDropDown {
  color: #333;
  font-size: 14px;
  line-height: 16px;
  padding: 0 8px;
  position: relative;
}

.btnAddImg {
  position: relative;
  height: 100%;
  justify-content: center;
  align-items: center;
  display: flex;
}

.btnAddImg>img,
.itemArrowDropDownImg {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  cursor: pointer;
  opacity: 0;
  background: transparent;
}

.itemDropDownWithLine {
  border-right: 1px solid #B2B2B2;
}

.itemArrowDropDown {
  padding: 0 6px;
  cursor: pointer;
  height: 100%;
  display: flex;
  position: relative;
  justify-content: center;
  align-items: center;
}

.viewContentItemDrop {
  width: 162px;
  position: absolute;
  right: 0;
  flex-shrink: 0;
  display: flex;
  flex-direction: column;
  background: #FFF;
  padding-bottom: 6px;
  border-radius: 4px;
  box-shadow: 0px 2px 12px 0px rgba(0, 0, 0, 0.20);
  /* box-shadow: 0px 3px 12px 0px rgba(0, 0, 0, 0.20); */
}

.viewContentItemDropTop {
  top: 105%;
}

.viewContentItemDropBottom {
  bottom: 105%;
}

.itemArrowDropDown:hover div[datatype="viewItemHover"] {
   display: flex;
}

.viewItemHoverTitle {
  color: #333;
  font-size: 14px;
  font-style: normal;
  font-weight: 600;
  padding: 12px 12px 6px 12px;
  line-height: 16px;
}

.viewItemDrop {
  height: 32px;
  display: flex;
  padding: 0 12px;
  padding-right: 0;
  align-items: center;
  cursor: pointer;
  background: #fff
}

.viewItemDrop>span {
  flex-grow: 1;
  font-size: 14px;
  padding: 0 12px;
  line-height: 16px;
}

.viewItemDrop:hover {
  background: #F0F0F0
}

.viewIconPin {
  display: flex;
  padding: 10px;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.viewIconPinDisable{
  opacity: 0.5;
  cursor: not-allowed !important;
}

.viewIconPinDisable img{
  cursor: not-allowed !important;
}

.itemArrowDropDown>svg,
.viewItemDrop>svg,
.viewItemDrop>span,
.viewIconPin svg {
  pointer-events: none;
}

.viewIconPin:hover svg path {
  fill: rgb(29, 161, 242)
}

#PopupSyncNotifyContent {
  position: absolute;
  font-family: "Open Sans", Arial, sans-serif !important;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  background: #0000005c;
  display: flex;
  z-index: 2147483647;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  /* background: #FFFFFF;
  border-radius: 10px;
  align-items: center;
  display: flex;
  flex-direction: column;
  justify-content: center;
  padding: 16px 33px 27px 33px; */
}

.PopupSyncNotifyContent-main {
  background: #FFFFFF;
  border-radius: 10px;
  align-items: center;
  display: flex;
  width: 600px;
  height: 500px;
  position: relative;
  flex-direction: column;
  justify-content: space-evenly;
  padding: 32px 33px 27px 33px;
}


.PopupSyncNotifyContent-viewTitle {
  color: #333;
  font-family: Open Sans;
  font-size: 24px;
  font-style: normal;
  font-weight: 600;
  line-height: 32px;
}

.PopupSyncNotifyContent-viewDesc {
  margin-top: 16px;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  line-height: 24px;
  display: flex;
  align-items: center;
  text-align: center;
  padding-bottom: 32px;
  color: #333333;
}

.PopupSyncNotifyContent-main-close{
  position: absolute;
  top: -30px;
  right: 0;
  cursor: pointer;
}
.PopupSyncNotifyContent-viewViewBtn {
  
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.PopupSyncNotifyContent-viewViewBtn1 {
  display: flex;
  flex-direction: column;
  justify-content: center;
  cursor: pointer;
  align-items: center;
  background: #1DA1F2;
  border-radius: 72.6px;
  padding: 10px 46px;
  min-width: 189px;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 20px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #FFFFFF;
}
.PopupSyncNotifyContent-viewViewBtn1 img {
  width: 22px;
}

.PopupSyncNotifyContent-viewViewBtn2 {
  margin-top: 16px;
  display: flex;
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #7AC70C;
  border-radius: 72.6px;
  padding: 10px 46px;
  min-width: 189px;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 20px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #fff;
}

.PopupSyncNotifyContent-viewViewBtn3 {
  margin-top: 16px;
  display: flex;
  cursor: pointer;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  background: #E6E6E6;
  border-radius: 72.6px;
  padding: 10px 46px;
  min-width: 189px;
  font-style: normal;
  font-weight: 400;
  font-size: 16px;
  line-height: 20px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #1DA1F2;
}

.PopupSyncNotifyContent-viewItems {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}


.ejoyViewNotifyAddWord {
  border-radius: 8px;
  position: fixed;
  left: 50%;
  transform: translate(-50%, 0);
  bottom: 16px;
  z-index: 9999;
  background: #FFF;
  box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.20);
  display: flex;
  padding: 8px 16px 8px 16px !important;
  align-items: center;
  gap: 54px;
}

.ejoyViewNotifyAddWord span {
  color: var(--standard-standard-high-day, #2C2C2C);
  font-size: 16px;
  font-style: normal;
  font-weight: 600;
  line-height: 20px;
}

.ejoyViewNotifyAddWord button {
  display: flex;
  flex-direction: column;
  justify-content: center;
  cursor: pointer;
  align-items: center;
  padding: 10px 12px;
  gap: 8px;
  color: var(--Primary-Azuare, #1DA1F2);
  text-align: right;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  border: none;
  background: transparent;
  line-height: 20px;
}

.ejoyStatusEndGeneralSub {
  align-items: center;
  background: #fff;
  border-radius: 8px;
  bottom: 20px;
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  color: #333;
  display: flex;
  font-size: 16px;
  font-style: normal;
  font-weight: 400;
  justify-content: center;
  line-height: 20px;
  padding: 16px;
  position: fixed;
  left: 50%;
  transform: translate(-50%,0);
  text-align: center;
  z-index: 999999;
}

.ejoyStatusEndGeneralSub svg {
  margin-right: 6px
}

.ejoyBtnCloseShowGeneral{
  cursor: pointer;
  display: flex;
  padding-left: 32px;
}


.selectWbConPopup {
  /* filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); */
  display: flex;
  align-items: center;
  padding: 8px 8px 0 8px;
  font-size: 12px;
  color: #666666;
  position: fixed;
  inset: 0;
  justify-content: center;
  background: #00000082;
  z-index: 999999;
}

.selectWbConSelectPopup {
  visibility: hidden;
  background: white;
  z-index: 999;
  min-width: 255px;
  max-width: 300px;
  height: 330px;
  display: flex;
  flex-direction: column;
  filter: drop-shadow(-1px 7px 4px rgba(0, 0, 0, 0.2));
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
  border-radius: 5px;
}

.selectWbConSelectMainPopup {
  overflow: auto;
  overflow-x: hidden;
  flex: 1;
}

.selectWbConSelectPopup.isShow {
  visibility: visible;
}

.selectWbConSelectPopup.hidden {
  visibility: hidden;
}

.itemOptionSelectWbPopup {
  cursor: pointer;
  padding: 6px 8px;
  font-style: normal;
  font-weight: normal;
  font-size: 12px;
  line-height: 16px;
  display: flex;
  color: #666666;
  align-items: center;
}

.itemOptionSelectWbPopup.active {
  color: #1da1f2
}

.itemOptionSelectWbPopup:hover {
  text-decoration: underline;
}
          #popup_eJOY {
  all: initial;
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  background-color: rgba(0, 0, 0, 0.8);
  z-index: 99999999999999999999999999999999;
  outline: none;
  display: flex;
  justify-content: center;
  align-items: center;
}

.view_desc {
  display: flex;
  min-width: 279px;
  align-items: center;
  justify-content: flex-start;
}

.popup_main_go_pro {
  /* position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0; */
  position: relative;
  margin: auto;
  /* height: 201px; */
  width: 623px;
  border-radius: 10px;
  background-color: #fff;
  display: flex;
  max-width: 100%;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: -0.4px;
  text-align: center;
  color: #000000;
  animation: alertPop 0.2s ease-out;
  background: white;
  font-family: "Open Sans", Arial, sans-serif;
}

.popup_main {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  height: 201px;
  width: 415px;
  max-width: 100%;
  border-radius: 5px;
  background-color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: -0.4px;
  text-align: center;
  color: #000000;
  animation: alertPop 0.2s ease-out
}

.popup_main_login {
  position: absolute;
  font-family: "Open Sans", Arial, sans-serif !important;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  height: 342px;
  width: 392px;
  max-width: 100%;
  border-radius: 5px;
  background-color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: space-around;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: -0.4px;
  text-align: center;
  color: #000000;
  animation: alertPop 0.2s ease-out
}

.popup_main_login span, .popup_main_login button {
  font-family: "Open Sans", Arial, sans-serif !important;
}

@keyframes alertPop {
  0% {
    transform: scale(0)
  }
  100% {
    transform: scale(1)
  }
}

#popup_eJOY header {
  font-size: 24px;
  font-weight: 600;
  margin-top: 10px;
}

#popup_eJOY p {
  width: 342px;
}

.popup_line {
  width: 414px;
  height: 1px;
  background-color: #d8d8d8;
  margin-top: 6px;
}

.popup_close_btn {
  position: absolute;
  top: 18px;
  right: 29px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  background-color: #b4b4b4;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.btn_login{
  background-color: rgb(29, 161, 242);
}
#popup_eJOY .titleTxt {
  font-style: normal;
  font-weight: 600;
  font-size: 32px;
  max-width: 100%;
  line-height: 40px;
  text-align: center;
  color: #333333;
  padding-top: 16px;
}

#popup_eJOY .descTxt {
  font-style: normal;
  font-weight: normal;
  font-size: 18px;
  line-height: 28px;
  text-align: center;
  color: #333333;
  padding-top: 16px;
  max-width: 100%;
  width: 403px;
}

#popup_eJOY .descTxt span:first-child {
  color: rgb(29, 161, 242);
  text-decoration: none;
  cursor: pointer;
}

#popup_eJOY .viewIcon {
  width: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 16px 0 40px 0;
}

#popup_eJOY .viewItem {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  margin: 0 20px;
  cursor: pointer;
}

#popup_eJOY .itemICon {
  background: linear-gradient(360deg, #71C5F6 -3.99%, #61CCDF 95.66%);
  border-radius: 18px;
  width: 80px;
  height: 80px;
  display: flex;
  justify-content: center;
  align-items: center;
  margin-bottom: 8px;
}

#popup_eJOY .itemText {
  font-style: normal;
  font-weight: 300;
  font-size: 12px;
  line-height: 15px;
  text-align: center;
  letter-spacing: -0.0738461px;
  color: #000000;
  width: 90px;
}

#popup_eJOY button {
  border-radius: 16px;
  color: #fff;
  padding: 6px 16px;
  background-color: #FF7700;
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
  outline: none;
  font-weight: 600;
  font-size: 16px;
  margin-top: 24px;
  border: none;
}

.popup_main_login button {
  padding: 6px 49px !important;
}

.popup_main_login .popup_close_btn {
  top: 8px !important;
  right: 9px !important;
}

@media only screen and (max-width: 400px) {
  #popup_eJOY .popup_main_go_pro {
    border-radius: 0;
  }
  #popup_eJOY .titleTxt {
    font-size: 18px;
    line-height: 24px;
    padding-top: 16px;
  }
  #popup_eJOY .descTxt {
    font-size: 14px;
    line-height: 16px;
    padding-top: 10px;
  }
  #popup_eJOY .viewIcon {
    padding: 16px 0 13px 0;
  }
}

.popup_main_onboarding {
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  margin: auto;
  height: 520px;
  width: 773px;
  max-width: 100%;
  border-radius: 10px;
  background-color: #fff;
  display: flex;
  flex-direction: column;
  justify-content: flex-start;
  align-items: center;
  font-size: 16px;
  font-weight: 400;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: -0.4px;
  text-align: center;
  color: #000000;
  animation: alertPop 0.2s ease-out
}

.popup_main_onboarding_no_ani{
  animation:none;
}

.onboarding_popup_close {
  position: absolute;
  top: -25px;
  right: 10px;
  width: 12px;
  height: 12px;
  border-radius: 50%;
  /* background-color: #b4b4b4; */
  display: flex;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.onboarding_btn {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
}

.onboarding_content {
  width: 100%;
  height: 100%;
  justify-content: space-around;
  align-items: center;
  display: flex;
  flex-direction: column;
  padding: 10px 0 50px 0;
}

.onboarding_text {
  font-style: normal;
  font-weight: 600;
  font-size: 18px;
  line-height: 24px;
  font-family: sans-serif;
  display: flex;
  align-items: center;
  text-align: center;
  color: #333333;
  padding: 0 40px;
}

.onboarding_btn>button {
  margin: 16px 0 !important;
  line-height: 20px !important;
  padding: 10px 20px !important;
  border-radius: 72.6px !important;
  min-width: 264px !important;
  font-weight: 400 !important;
}

.onboarding_btn_no_remind {
  height: 40px !important;
  min-width: 264px !important;
  border: 1px solid #B3B3B3 !important;
  border-radius: 72.6px !important;
  font-style: normal !important;
  margin: 16px 0 !important;
  font-weight: 600 !important;
  font-size: 16px !important;
  line-height: 20px !important;
  padding: 10px 40px !important;
  display: flex !important;
  align-items: center !important;
  text-align: center !important;
  color: #B3B3B3 !important;
  background: transparent !important;
}

.onboarding_content_remind {
  width: 100%;
  height: 100%;
  font-family: sans-serif;
  /* justify-content: space-around; */
  align-items: center;
  display: flex;
  flex-direction: column;
  /* padding: 10px 0 50px 0; */
}

.onboarding_remind_main {
  display: flex;
  justify-content: space-around;
  width: 100%;
  margin-top: 40px;
}

.onboarding_btn_back {
  display: flex;
  align-items: center;
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  align-self: flex-start;
  line-height: 20px;
  padding-top: 16px;
  padding-left: 16px;
  /* identical to box height, or 125% */
  display: flex;
  align-items: center;
  cursor: pointer;
  text-align: center;
  /* 6.“ON”color/Lower emphasis */
  color: #B3B3B3;
}

.onboarding_remind_main_right_view_time {
  text-align: left;
  display: flex;
  padding: 8px 0;
  font-family: "Open Sans", Arial, sans-serif;
  font-family: sans-serif;
}

.onboarding_remind_main_right_view_time>span {
  font-style: normal;
  font-weight: normal;
  padding-right: 8px;
  font-size: 14px;
  min-width: 94px;
  line-height: 16px;
  display: flex;
  align-items: center;
  color: #8C8C8C;
}

.onboarding_remind_main_right_view_time_main {
  display: flex;
}

.onboarding_remind_main_right_view_time_main_item {
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  cursor: pointer;
}

.onboarding_remind_main_right_view_time_input_time {
  padding: 2px 8px !important;
  border: 1px solid #B3B3B3 !important;
  border-radius: 3px !important;
  box-sizing: border-box !important;
}

.onboarding_remind_main_right_view_time_main_item span:first-child {
  margin: 0 2px 2px 2px;
  background: #FFFFFF;
  border: 1px solid #B3B3B3;
  box-sizing: border-box;
  min-width: 31px;
  border-radius: 3px;
  font-style: normal;
  font-weight: normal;
  font-size: 10px;
  line-height: 16px;
  display: flex;
  justify-content: center;
  align-items: center;
  text-align: center;
  color: #333333;
}

.onboarding_remind_main_right_view_time_main_item .span_check {
  border: 1px solid #B2B2B2;
  width: 10px;
  height: 10px;
  border-radius: 100px;
}

.popup_main_onboarding .onboarding_btn button {
  margin-top: 0 !important;
}

.onboarding_success_icon {
  border-radius: 90.3704px;
  border: 15px solid #7AC70C;
  width: 92px;
  height: 92px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.onboarding_success_text {
  font-style: normal;
  font-weight: normal;
  font-size: 16px;
  font-family: "Open Sans", Arial, sans-serif;
  line-height: 20px;
  display: flex;
  align-items: center;
  text-align: center;
  color: #333333;
}

.popup_main_success_onboarding{
  width: 398px;
  height: 245px;
}

.onboarding_success_content{
  padding: 16px;
}
        </style>
        <div id="eJOY__extension_shadow"><div class="wrapperEjoy"><div class="container" style="display: none;"><div class="viewIcon"><img src="chrome-extension://amfojhdiedpdnlijjbhjnhokbnohfdfb/img/logo/icon@2x.png" width="24" alt="" height="24" class="icon"><div class="itemArrowDropDown"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 4L6 9L11 4H1Z" fill="#8C8C8C"></path></svg><img class="itemArrowDropDownImg"></div></div></div><span style="position: absolute; top: 1px; left: 1px; opacity: 0; pointer-events: none; background-color: rgb(229, 56, 56); border: 1px solid rgb(229, 56, 56); border-radius: 16px; display: flex; justify-content: center; color: rgb(255, 255, 255); z-index: 2147483647; font-size: 8px; min-width: 12px; min-height: 12px; line-height: 11px; align-items: center;">1</span><span style="position: absolute; top: 1px; opacity: 0; pointer-events: none; background-color: rgba(2, 2, 2, 0.9); border-radius: 4px; padding: 4px 10px; display: flex; min-width: 100px; justify-content: center; color: rgb(255, 255, 255); z-index: 2147483647; font-size: 12px; min-height: 12px; line-height: 16px; align-items: center;"></span></div></div></template></div></body><div id="eJOY__extension_ai_adv_root" class="eJOY__extension_ai_adv_root_class"><div class="wrapperAiAssEjoy"><div class="containerSumEjoyIcon "><div class="viewIconEjoy gl-tooltip-ejoy gl-tooltip-ejoy-left" tooltip-data="eJOY AI Assistant"><div class="viewIconEjoyItem"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="26" viewBox="0 0 24 26" fill="none"><mask id="mask0_427_34" maskUnits="userSpaceOnUse" x="16" y="3" width="8" height="8" style="mask-type: luminance;"><path d="M24 3H16V11H24V3Z" fill="white"></path></mask><g mask="url(#mask0_427_34)"><path d="M23.8012 7.00309L21.0136 8.01539L20.0012 10.8031L18.9889 8.01539L16.2012 7.00309L18.9889 5.9908L20.0012 3.20309L21.0136 5.9908L23.8012 7.00309Z" fill="url(#paint0_linear_427_34)"></path></g><mask id="mask1_427_34" maskUnits="userSpaceOnUse" x="0" y="10" width="6" height="6" style="mask-type: luminance;"><path d="M6 10H0V16H6V10Z" fill="white"></path></mask><g mask="url(#mask1_427_34)"><path d="M5.8494 13.0023L3.7587 13.7616L2.9994 15.8523L2.2402 13.7616L0.149399 13.0023L2.2402 12.2431L2.9994 10.1523L3.7587 12.2431L5.8494 13.0023Z" fill="url(#paint1_linear_427_34)"></path></g><mask id="mask2_427_34" maskUnits="userSpaceOnUse" x="16" y="20" width="4" height="4" style="mask-type: luminance;"><path d="M20 20H16V24H20V20Z" fill="white"></path></mask><g mask="url(#mask2_427_34)"><path d="M19.8996 22.0016L18.5058 22.5077L17.9996 23.9016L17.4934 22.5077L16.0996 22.0016L17.4934 21.4954L17.9996 20.1016L18.5058 21.4954L19.8996 22.0016Z" fill="url(#paint2_linear_427_34)"></path></g><g filter="url(#filter0_d_427_34)"><path fill-rule="evenodd" clip-rule="evenodd" d="M11.8671 20.3327C14.8098 20.2537 16.4674 18.0538 16.368 15.5257C15.9553 11.8147 11.5502 10.6201 13.3135 5.666C9.7712 8.7188 7.228 12.6272 7.3363 15.408C7.3847 18.1053 8.9455 20.3327 11.8671 20.3327ZM14.5512 16.5696C15.0045 16.5696 15.3306 16.2001 15.3719 15.7489C15.4799 15.431 15.3719 13.9738 14.2947 13.0395C14.4695 14.2529 13.6329 15.261 13.7305 15.7489C13.7305 16.2022 14.0979 16.5696 14.5512 16.5696Z" fill="#1DA1F2"></path></g><defs><filter id="filter0_d_427_34" x="2.47583" y="0.80886" width="18.7535" height="24.381" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB"><feflood flood-opacity="0" result="BackgroundImageFix"></feflood><fecolormatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"></fecolormatrix><feoffset></feoffset><fegaussianblur stdDeviation="2.42857"></fegaussianblur><fecolormatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.12 0"></fecolormatrix><feblend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_427_34"></feblend><feblend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_427_34" result="shape"></feblend></filter><lineargradient id="paint0_linear_427_34" x1="20.0012" y1="3.20309" x2="20.0012" y2="10.8031" gradientUnits="userSpaceOnUse"><stop stop-color="#1DA1F2"></stop><stop offset="1" stop-color="#6CD2FF"></stop></lineargradient><lineargradient id="paint1_linear_427_34" x1="2.9994" y1="10.1523" x2="2.9994" y2="15.8523" gradientUnits="userSpaceOnUse"><stop stop-color="#1DA1F2"></stop><stop offset="1" stop-color="#6CD2FF"></stop></lineargradient><lineargradient id="paint2_linear_427_34" x1="17.9996" y1="20.1016" x2="17.9996" y2="23.9016" gradientUnits="userSpaceOnUse"><stop stop-color="#1DA1F2"></stop><stop offset="1" stop-color="#6CD2FF"></stop></lineargradient></defs></svg></div><div class="moveIconEjoyAi"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.45139 0.667969C4.64931 0.667969 4 1.31727 4 2.11936C4 2.92144 4.64931 3.57075 5.45139 3.57075C6.25347 3.57075 6.90278 2.92144 6.90278 2.11936C6.90278 1.31727 6.25347 0.667969 5.45139 0.667969ZM4 8.00868C4 7.2066 4.64931 6.55729 5.45139 6.55729C6.25347 6.55729 6.90278 7.2066 6.90278 8.00868C6.90278 8.81076 6.25347 9.46007 5.45139 9.46007C4.64931 9.46007 4 8.81076 4 8.00868ZM4 13.8837C4 13.0816 4.64931 12.4323 5.45139 12.4323C6.25347 12.4323 6.90278 13.0816 6.90278 13.8837C6.90278 14.6858 6.25347 15.3351 5.45139 15.3351C4.64931 15.3351 4 14.6858 4 13.8837Z" fill="#666666"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M10.7854 0.667969C9.98329 0.667969 9.33398 1.31727 9.33398 2.11936C9.33398 2.92144 9.98329 3.57075 10.7854 3.57075C11.5875 3.57075 12.2368 2.92144 12.2368 2.11936C12.2368 1.31727 11.5875 0.667969 10.7854 0.667969ZM9.33398 8.00868C9.33398 7.2066 9.98329 6.55729 10.7854 6.55729C11.5875 6.55729 12.2368 7.2066 12.2368 8.00868C12.2368 8.81076 11.5875 9.46007 10.7854 9.46007C9.98329 9.46007 9.33398 8.81076 9.33398 8.00868ZM9.33398 13.8837C9.33398 13.0816 9.98329 12.4323 10.7854 12.4323C11.5875 12.4323 12.2368 13.0816 12.2368 13.8837C12.2368 14.6858 11.5875 15.3351 10.7854 15.3351C9.98329 15.3351 9.33398 14.6858 9.33398 13.8837Z" fill="#666666"></path></svg></div></div><div class="viewCloseIconEjoy"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none"><circle cx="6" cy="6" r="6" fill="black" fill-opacity="0.25"></circle><path fill-rule="evenodd" clip-rule="evenodd" d="M8.71289 3.58672C8.87135 3.74518 8.87135 4.00209 8.71289 4.16054L6.72363 6.14981L8.71289 8.13907C8.87135 8.29752 8.87135 8.55444 8.71289 8.71289C8.55444 8.87135 8.29752 8.87135 8.13907 8.71289L6.14981 6.72363L4.16054 8.71289C4.00209 8.87135 3.74518 8.87135 3.58672 8.71289C3.42826 8.55443 3.42826 8.29752 3.58672 8.13907L5.57598 6.14981L3.58672 4.16054C3.42826 4.00209 3.42826 3.74518 3.58672 3.58672C3.74518 3.42826 4.00209 3.42826 4.16054 3.58672L6.14981 5.57598L8.13907 3.58672C8.29752 3.42826 8.55444 3.42826 8.71289 3.58672Z" fill="white"></path></svg></div></div><div class="eJOY__container "><div class="btnReportClose"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none"><path fill-rule="evenodd" clip-rule="evenodd" d="M14.0291 2.63758C14.3812 2.98971 14.3812 3.56062 14.0291 3.91275L9.6085 8.33333L14.0291 12.7539C14.3812 13.106 14.3812 13.677 14.0291 14.0291C13.677 14.3812 13.106 14.3812 12.7539 14.0291L8.33333 9.6085L3.91275 14.0291C3.56062 14.3812 2.98971 14.3812 2.63758 14.0291C2.28546 13.677 2.28546 13.106 2.63758 12.7539L7.05817 8.33333L2.63758 3.91275C2.28546 3.56062 2.28546 2.98971 2.63758 2.63758C2.98971 2.28546 3.56062 2.28546 3.91275 2.63758L8.33333 7.05817L12.7539 2.63758C13.106 2.28546 13.677 2.28546 14.0291 2.63758Z" fill="#B3B3B3"></path></svg></div></div></div></div><grammarly-desktop-integration data-grammarly-shadow-root="true"><template shadowrootmode="open">
          <style>
      div.grammarly-desktop-integration {
        position: absolute;
        width: 1px;
        height: 1px;
        padding: 0;
        margin: -1px;
        overflow: hidden;
        clip: rect(0, 0, 0, 0);
        white-space: nowrap;
        border: 0;
        -moz-user-select: none;
        -webkit-user-select: none;
        -ms-user-select:none;
        user-select:none;
      }

      div.grammarly-desktop-integration:before {
        content: attr(data-content);
      }
    </style><div aria-label="grammarly-integration" role="group" tabindex="-1" class="grammarly-desktop-integration" data-content="{&quot;mode&quot;:&quot;full&quot;,&quot;isActive&quot;:true,&quot;isUserDisabled&quot;:false}"></div></template></grammarly-desktop-integration></html>