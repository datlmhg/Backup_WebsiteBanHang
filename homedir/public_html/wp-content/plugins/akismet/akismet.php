@charset "UTF-8";
@import url("src/bootstrap/bootstrap.min.css");
@import url("src/splide/splide.min.css");
@import url("https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css");
@import url("https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap");
body {
  font-family: "Poppins", sans-serif;
  font-size: 15px;
  line-height: 1.6rem;
  letter-spacing: 0.004em;
  color: #958d9e;
  background: #EDEDF5;
  width: 100%;
  height: 100%;
  overflow-x: hidden;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  transition: .2s all;
  color: #6236FF;
  outline: 0 !important;
  text-decoration: none;
}

a:hover, a:active, a:focus {
  outline: 0 !important;
  color: #6236FF;
  text-decoration: none;
}

::-webkit-scrollbar {
  width: 0;
}

.appHeader {
  height: 56px;
  display: flex;
  justify-content: center;
  align-items: center;
  position: fixed;
  top: env(safe-area-inset-top);
  left: 0;
  right: 0;
  z-index: 999;
  background: #FFFFFF;
  color: #27173E;
  border-bottom: 1px solid #DCDCE9;
}

.appHeader:before {
  content: '';
  height: env(safe-area-inset-top);
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  width: 100%;
  z-index: 99999;
  background: #FFF;
}

.appHeader.no-border {
  border: 0;
  box-shadow: none;
}

.appHeader.transparent {
  background: transparent;
}

.appHeader.transparent:before {
  background: #EDEDF5;
}

.appHeader .left,
.appHeader .right {
  height: 56px;
  display: flex;
  align-items: center;
  position: absolute;
}

.appHeader .left .icon,
.appHeader .left ion-icon,
.appHeader .right .icon,
.appHeader .right ion-icon {
  font-size: 26px;
}

.appHeader .left .headerButton,
.appHeader .right .headerButton {
  min-width: 36px;
  height: 56px;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  color: #6236FF;
  position: relative;
}

.appHeader .left .headerButton .btn,
.appHeader .right .headerButton .btn {
  font-size: 16px;
  height: 32px;
  padding: 0px 14px;
}

.appHeader .left .headerButton:active,
.appHeader .right .headerButton:active {
  opacity: .6;
}

.appHeader .left {
  left: 10px;
  top: 0;
}

.appHeader .right {
  right: 10px;
  top: 0;
}

.appHeader .pageTitle {
  font-size: 17px;
  font-weight: 500;
  padding: 0 10px;
}

.appHeader .pageTitle .logo {
  max-height: 24px;
}

.appHeader.text-light {
  color: #FFF;
}

.appHeader.text-light .headerButton {
  color: #FFF;
}

.appHeader.bg-primary, .appHeader.bg-secondary, .appHeader.bg-success, .appHeader.bg-warning, .appHeader.bg-danger, .appHeader.bg-info, .appHeader.bg-light, .appHeader.bg-dark {
  border: 0;
}

.appHeader.bg-primary:before {
  background: #6236FF !important;
}

.appHeader.bg-secondary:before {
  background: #8494A8 !important;
}

.appHeader.bg-success:before {
  background: #1DCC70 !important;
}

.appHeader.bg-warning:before {
  background: #FFB400 !important;
}

.appHeader.bg-danger:before {
  background: #FF396F !important;
}

.appHeader.bg-info:before {
  background: #05D0A4 !important;
}

.appHeader.bg-dark:before {
  background: #222 !important;
}

.extraHeader {
  position: fixed;
  left: 0;
  top: 50px;
  height: 50px;
  right: 0;
  width: 100%;
  padding: 5px 16px;
  display: flex;
  margin-top: env(safe-area-inset-top);
  align-items: center;
  background: #FFF;
  z-index: 1000;
  border-bottom: 1px solid #DCDCE9;
}

.testPreview .appHeader {
  position: relative;
  top: 0;
  z-index: 0;
}

.appBottomMenu {
  min-height: 56px;
  position: fixed;
  z-index: 999;
  width: 100%;
  bottom: 0;
  left: 0;
  right: 0;
  background: #FFFFFF;
  display: flex;
  align-items: center;
  justify-content: center;
  border-top: 1px solid #DCDCE9;
  padding-left: 4px;
  padding-right: 4px;
  padding-bottom: env(safe-area-inset-bottom);
}

.appBottomMenu.no-border {
  border: 0 !important;
  box-shadow: 0 !important;
}

.appBottomMenu .item {
  font-size: 9px;
  letter-spacing: 0;
  text-align: center;
  width: 100%;
  height: 56px;
  line-height: 1.2em;
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
}

.appBottomMenu .item:before {
  content: '';
  display: block;
  height: 2px;
  border-radius: 0 0 10px 10px;
  background: transparent;
  position: absolute;
  left: 4px;
  right: 4px;
  top: 0;
}

.appBottomMenu .item .col {
  width: 100%;
  padding: 0 4px;
  text-align: center;
}

.appBottomMenu .item .icon,
.appBottomMenu .item ion-icon {
  display: inline-flex;
  margin: 1px auto 3px auto;
  font-size: 24px;
  line-height: 1em;
  color: #27173E;
  transition: 0.1s all;
  display: block;
  margin-top: 1px;
  margin-bottom: 3px;
}

.appBottomMenu .item .action-button {
  display: inline-flex;
  width: 50px;
  height: 50px;
  margin-left: -5px;
  margin-right: -5px;
  align-items: center;
  justify-content: center;
  border-radius: 200px;
  background: #6236FF;
}

.appBottomMenu .item .action-button.large {
  width: 60px;
  height: 60px;
  margin-top: -20px;
  margin-left: -10px;
  margin-right: -10px;
}

.appBottomMenu .item .action-button .icon,
.appBottomMenu .item .action-button ion-icon {
  color: #FFF !important;
  margin: 0 !important;
  line-height: 0 !important;
}

.appBottomMenu .item strong {
  margin-top: 4px;
  display: block;
  color: #27173E;
  font-weight: 400;
  transition: 0.1s all;
}

.appBottomMenu .item:active {
  opacity: .8;
}

.appBottomMenu .item.active:before {
  background: #6236FF;
}

.appBottomMenu .item.active .icon,
.appBottomMenu .item.active ion-icon,
.appBottomMenu .item.active strong {
  color: #6236FF !important;
  font-weight: 500;
}

.appBottomMenu .item:hover .icon,
.appBottomMenu .item:hover ion-icon,
.appBottomMenu .item:hover strong {
  color: #27173E;
}

.appBottomMenu.text-light {
  color: #FFF;
}

.appBottomMenu.text-light .item {
  color: #FFF;
  opacity: .7;
}

.appBottomMenu.text-light .item .icon,
.appBottomMenu.text-light .item ion-icon,
.appBottomMenu.text-light .item strong {
  color: #FFF;
}

.appBottomMenu.text-light .item.active {
  opacity: 1;
}

.appBottomMenu.text-light .item.active .icon,
.appBottomMenu.text-light .item.active ion-icon,
.appBottomMenu.text-light .item.active strong {
  color: #FFF !important;
}

.appBottomMenu.bg-primary, .appBottomMenu.bg-secondary, .appBottomMenu.bg-success, .appBottomMenu.bg-warning, .appBottomMenu.bg-danger, .appBottomMenu.bg-info, .appBottomMenu.bg-light, .appBottomMenu.bg-dark {
  border: 0;
}

.appBottomMenu.bg-primary .item:before, .appBottomMenu.bg-secondary .item:before, .appBottomMenu.bg-success .item:before, .appBottomMenu.bg-warning .item:before, .appBottomMenu.bg-danger .item:before, .appBottomMenu.bg-info .item:before, .appBottomMenu.bg-light .item:before, .appBottomMenu.bg-dark .item:before {
  display: none;
}

#appCapsule {
  padding: 56px 0;
  margin-bottom: env(safe-area-inset-bottom);
  margin-top: env(safe-area-inset-top);
}

#appCapsule.extra-header-active {
  padding-top: 106px;
}

#appCapsule.full-height {
  min-height: 100vh;
}

.section {
  padding: 0 16px;
}

.section.full {
  padding: 0;
}

.content-hero {
  background: #FFF;
  border-bottom: 1px solid #DCDCE9;
  padding: 16px;
}

.content-hero .title {
  font-weight: 700;
  letter-spacing: -0.03em;
  font-size: 17px;
  margin: 0;
}

.wide-block {
  background: #fff;
  border-top: 1px solid #DCDCE9;
  border-bottom: 1px solid #DCDCE9;
  padding-left: 16px;
  padding-right: 16px;
}

.section-title {
  font-size: 15px;
  padding: 6px 0;
  color: #27173E;
  font-weight: 500;
}

.section-title.large {
  font-size: 20px;
  line-height: 1.2em;
  font-weight: 700;
}

.section-title.medium {
  font-size: 17px;
  font-weight: 700;
}

.content-header,
.content-footer {
  font-size: 11px;
  color: #A9ABAD;
  padding-left: 0;
  padding-right: 0;
  line-height: 1.4em;
}

.section.full .section-title {
  padding-left: 16px;
  padding-right: 16px;
}

.section.full .content-header,
.section.full .content-footer {
  padding-left: 16px;
  padding-right: 16px;
}

.section.full .wide-block .content-header,
.section.full .wide-block .content-footer {
  padding-left: 0;
  padding-right: 0;
}

.section.inset .wide-block {
  border: 0;
  border-radius: 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
}

.profileBox {
  padding: 0 16px;
  display: flex;
  align-items: center;
}

.profileBox .image-wrapper {
  margin-right: 16px;
}

.profileBox .in {
  line-height: 1.4em;
  padding-right: 25px;
}

.profileBox .in strong {
  display: block;
  font-weight: 500;
  color: #27173E;
}

.profileBox .in .text-muted {
  font-size: 14px;
  color: #A9ABAD !important;
}

.sidebar-balance {
  padding: 6px 16px;
  background: #6236FF;
}

.sidebar-balance .listview-title {
  padding-right: 0;
  padding-left: 0;
  color: #FFF;
  opacity: .6;
}

.sidebar-balance .amount {
  font-weight: 700;
  letter-spacing: -0.01em;
  line-height: 1em;
  font-weight: 32px;
  color: #FFF;
  margin-bottom: 6px;
}

.action-group {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 0px 16px 10px 16px;
  background: #6236FF;
}

.action-group .action-button {
  padding: 10px 2px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  text-align: center;
  font-size: 11px;
  line-height: 1em;
  color: rgba(255, 255, 255, 0.7);
}

.action-group .action-button .iconbox {
  background: rgba(0, 0, 0, 0.3);
  width: 38px;
  height: 38px;
  margin: 0 auto 8px auto;
  border-radius: 100%;
  font-size: 18px;
  color: #FFF;
  display: flex;
  align-items: center;
  justify-content: center;
}

.action-group .action-button:last-child {
  border-right: 0;
}

#sidebarPanel .modal-dialog {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
}

#sidebarPanel .modal-body {
  margin-bottom: 34px;
  padding-bottom: env(safe-area-inset-bottom) !important;
  width: 300px;
}

.panelbox-left .listview > li,
.panelbox-right .listview > li {
  padding: 10px 16px;
}

.panelbox-left .link-listview > li,
.panelbox-right .link-listview > li {
  padding: 0;
}

.panelbox-left .link-listview > li a,
.panelbox-right .link-listview > li a {
  padding: 10px 36px 10px 16px;
}

.panelbox-left .image-listview > li,
.panelbox-right .image-listview > li {
  padding: 0;
}

.panelbox-left .image-listview > li .item,
.panelbox-right .image-listview > li .item {
  padding: 10px 16px;
}

.panelbox-left .image-listview > li a.item,
.panelbox-right .image-listview > li a.item {
  padding-right: 36px;
}

.sidebar-close {
  position: absolute;
  right: 10px;
}

.appFooter {
  border-top: 1px solid #DCDCE9;
  padding: 16px;
  font-size: 12px;
  text-align: center;
  line-height: 1.2em;
  background: #FFF;
}

.appFooter .footer-title {
  font-weight: 500;
  color: #27173E;
  margin-bottom: 8px;
}

.exampleBox {
  width: 100%;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  border: 1px solid #bdbdd5;
  background: rgba(220, 220, 233, 0.3);
  font-size: 10px;
}

.iconExample {
  color: #27173E;
}

.rounded {
  border-radius: 10px !important;
}

.row {
  margin-left: -8px;
  margin-right: -8px;
}

.col-1,
.col-2,
.col-3,
.col-4,
.col-5,
.col-6,
.col-7,
.col-8,
.col-9,
.col-10,
.col-11,
.col-12,
.col-sm-1,
.col-sm-2,
.col-sm-3,
.col-sm-4,
.col-sm-5,
.col-sm-6,
.col-sm-7,
.col-sm-8,
.col-sm-9,
.col-sm-10,
.col-sm-11,
.col-sm-12,
.col-md-1,
.col-md-2,
.col-md-3,
.col-md-4,
.col-md-5,
.col-md-6,
.col-md-7,
.col-md-8,
.col-md-9,
.col-md-10,
.col-md-11,
.col-md-12,
.col-lg-1,
.col-lg-2,
.col-lg-3,
.col-lg-4,
.col-lg-5,
.col-lg-6,
.col-lg-7,
.col-lg-8,
.col-lg-9,
.col-lg-10,
.col-lg-11,
.col-lg-12,
.col-xl-1,
.col-xl-2,
.col-xl-3,
.col-xl-4,
.col-xl-5,
.col-xl-6,
.col-xl-7,
.col-xl-8,
.col-xl-9,
.col-xl-10,
.col-xl-11,
.col-xl-12 {
  padding-left: 8px;
  padding-right: 8px;
}

.m-0 {
  margin: 0 !important;
}

.m-05 {
  margin: 5px !important;
}

.m-1 {
  margin: 8px !important;
}

.m-2 {
  margin: 16px !important;
}

.m-3 {
  margin: 24px !important;
}

.m-4 {
  margin: 32px !important;
}

.m-5 {
  margin: 40px !important;
}

.mt-0 {
  margin-top: 0 !important;
}

.mt-05 {
  margin-top: 5px !important;
}

.mt-1 {
  margin-top: 8px !important;
}

.mt-2 {
  margin-top: 16px !important;
}

.mt-3 {
  margin-top: 24px !important;
}

.mt-4 {
  margin-top: 32px !important;
}

.mt-5 {
  margin-top: 40px !important;
}

.mb-0 {
  margin-bottom: 0px !important;
}

.mb-05 {
  margin-bottom: 5px !important;
}

.mb-1 {
  margin-bottom: 8px !important;
}

.mb-2 {
  margin-bottom: 16px !important;
}

.mb-3 {
  margin-bottom: 24px !important;
}

.mb-4 {
  margin-bottom: 32px !important;
}

.mb-5 {
  margin-bottom: 40px !important;
}

.ms-0 {
  margin-left: 0 !important;
}

.ms-05 {
  margin-left: 5px !important;
}

.ms-1 {
  margin-left: 8px !important;
}

.ms-2 {
  margin-left: 16px !important;
}

.ms-3 {
  margin-left: 24px !important;
}

.ms-4 {
  margin-left: 32px !important;
}

.ms-5 {
  margin-left: 40px !important;
}

.me-0 {
  margin-right: 0px !important;
}

.me-05 {
  margin-right: 5px !important;
}

.me-1 {
  margin-right: 8px !important;
}

.me-2 {
  margin-right: 16px !important;
}

.me-3 {
  margin-right: 24px !important;
}

.me-4 {
  margin-right: 32px !important;
}

.me-5 {
  margin-right: 40px !important;
}

.p-0 {
  padding: 0 !important;
}

.p-05 {
  padding: 5px !important;
}

.p-1 {
  padding: 8px !important;
}

.p-2 {
  padding: 16px !important;
}

.p-3 {
  padding: 24px !important;
}

.p-4 {
  padding: 32px !important;
}

.p-5 {
  padding: 40px !important;
}

.pt-0 {
  padding-top: 0px !important;
}

.pt-05 {
  padding-top: 5px !important;
}

.pt-1 {
  padding-top: 8px !important;
}

.pt-2 {
  padding-top: 16px !important;
}

.pt-3 {
  padding-top: 24px !important;
}

.pt-4 {
  padding-top: 32px !important;
}

.pt-5 {
  padding-top: 40px !important;
}

.pb-0 {
  padding-bottom: 0px !important;
}

.pb-05 {
  padding-bottom: 5px !important;
}

.pb-1 {
  padding-bottom: 8px !important;
}

.pb-2 {
  padding-bottom: 16px !important;
}

.pb-3 {
  padding-bottom: 24px !important;
}

.pb-4 {
  padding-bottom: 32px !important;
}

.pb-5 {
  padding-bottom: 40px !important;
}

.ps-0 {
  padding-left: 0px !important;
}

.ps-05 {
  padding-left: 5px !important;
}

.ps-1 {
  padding-left: 8px !important;
}

.ps-2 {
  padding-left: 16px !important;
}

.ps-3 {
  padding-left: 24px !important;
}

.ps-4 {
  padding-left: 32px !important;
}

.ps-5 {
  padding-left: 40px !important;
}

.pe-0 {
  padding-right: 0px !important;
}

.pe-05 {
  padding-right: 5px !important;
}

.pe-1 {
  padding-right: 8px !important;
}

.pe-2 {
  padding-right: 16px !important;
}

.pe-3 {
  padding-right: 24px !important;
}

.pe-4 {
  padding-right: 32px !important;
}

.pe-5 {
  padding-right: 40px !important;
}

h1,
h2,
h3,
h4,
h5,
h6 {
  color: #27173E;
  margin: 0 0 10px 0;
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small {
  color: rgba(39, 23, 62, 0.6);
}

h1 .badge,
h2 .badge,
h3 .badge,
h4 .badge,
h5 .badge,
h6 .badge {
  line-height: 1em;
}

.text-muted {
  font-size: 13px;
  color: #958d9e !important;
}

h1 {
  font-size: 32px;
  font-weight: 700;
}

h2 {
  font-size: 20px;
  font-weight: 700;
}

h3 {
  font-size: 17px;
  font-weight: 700;
}

h4 {
  font-size: 15px;
  font-weight: 500;
}

h5 {
  font-size: 13px;
  font-weight: 500;
}

h6 {
  font-size: 11px;
  font-weight: 500;
}

.lead {
  font-weight: 400;
  font-size: 17px;
  color: #958d9e;
}

mark {
  border-radius: 10px;
}

.text-large {
  font-size: 32px;
}

strong,
b {
  font-weight: 500;
}

blockquote.blockquote {
  padding: 16px;
  background: rgba(220, 220, 233, 0.5);
  border-radius: 10px;
  font-size: 17px;
  color: #27173E;
}

blockquote.blockquote .blockquote-footer {
  color: #958d9e;
  margin-top: 10px;
}

.imaged {
  height: auto;
  border-radius: 10px;
}

.imaged.w16 {
  width: 16px !important;
}

.imaged.w24 {
  width: 24px !important;
}

.imaged.w32 {
  width: 32px !important;
}

.imaged.w36 {
  width: 36px !important;
}

.imaged.w48 {
  width: 48px !important;
}

.imaged.w64 {
  width: 64px !important;
}

.imaged.w76 {
  width: 76px !important;
}

.imaged.w86 {
  width: 86px !important;
}

.imaged.w100 {
  width: 100px !important;
}

.imaged.w120 {
  width: 120px !important;
}

.imaged.w140 {
  width: 140px !important;
}

.imaged.w160 {
  width: 160px !important;
}

.imaged.w180 {
  width: 180px !important;
}

.imaged.w200 {
  width: 200px !important;
}

.imaged.img-fluid {
  width: 100%;
}

.imaged.rounded {
  border-radius: 100% !important;
}

.imaged.radius {
  border-radius: 10px !important;
}

.imaged.square {
  border-radius: 0 !important;
}

#loader {
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  z-index: 99999;
  background: #6236FF;
  display: flex;
  align-items: center;
  justify-content: center;
}

#loader .loading-icon {
  width: 42px;
  height: auto;
  animation: loadingAnimation 1s infinite;
}

@keyframes loadingAnimation {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

.badge {
  font-size: 12px;
  line-height: 1em;
  border-radius: 100px;
  letter-spacing: 0;
  height: 22px;
  min-width: 22px;
  padding: 0 6px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-weight: 400;
}

.badge-primary,
a.badge-primary {
  background: #6236FF !important;
}

.badge-secondary,
a.badge-secondary {
  background: #8494A8 !important;
}

.badge-success,
a.badge-success {
  background: #1DCC70 !important;
}

.badge-danger,
a.badge-danger {
  background: #FF396F !important;
}

.badge-warning,
a.badge-warning {
  background: #FFB400 !important;
  color: #FFF;
}

.badge-info,
a.badge-info {
  background: #05D0A4 !important;
}

.badge-light,
a.badge-light {
  background: rgba(255, 255, 255, 0.6) !important;
  color: #27173E;
}

.badge-dark,
a.badge-dark {
  background: #222 !important;
}

.badge-empty {
  display: inline-flex !important;
  min-width: 8px !important;
  width: 8px !important;
  height: 8px !important;
  padding: 0 !important;
  font-size: 0px;
}

.appHeader .badge {
  min-width: 16px;
  height: 16px;
  line-height: 9px !important;
  font-size: 10px;
  padding: 0 4px !important;
  position: absolute;
  right: 2px;
  top: 10px;
}

.appHeader .badge-empty {
  top: 14px;
}

.appBottomMenu .badge {
  min-width: 16px;
  height: 16px;
  line-height: 1em !important;
  font-size: 10px;
  padding: 0 4px !important;
  position: absolute;
  right: 50%;
  transform: translateX(120%);
  top: 6px;
}

.appBottomMenu .badge-empty {
  transform: translateX(200%);
  top: -1px;
}

.listview-title {
  color: #958d9e;
  padding: 7px 16px;
  font-size: 13px;
  font-weight: 500;
}

.listview {
  display: block;
  padding: 0;
  margin: 0;
  color: #27173E;
  background: #fff;
  border-top: 1px solid #DCDCE9;
  border-bottom: 1px solid #DCDCE9;
  line-height: 1.3em;
}

.listview .text-muted {
  font-size: 13px;
  color: #A9ABAD !important;
}

.listview .text-small {
  font-size: 13px;
  color: #958d9e;
}

.listview .text-xsmall {
  font-size: 11px;
  color: #A9ABAD;
}

.listview > li {
  padding: 11px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  position: relative;
  min-height: 50px;
}

.listview > li:after {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  height: 1px;
  background: #DCDCE9;
}

.listview > li:last-child:after {
  display: none;
}

.listview > li footer,
.listview > li header {
  font-size: 12px;
  margin: 0;
  line-height: 1.2em;
}

.listview > li footer {
  color: #958d9e;
  margin-top: 3px;
}

.listview > li header {
  margin-bottom: 3px;
}

.listview > li.divider-title {
  background: rgba(220, 220, 233, 0.5);
  margin-top: -1px;
  border-top: 1px solid #DCDCE9;
  border-bottom: 1px solid #DCDCE9;
  padding: 12px 16px;
  font-size: 13px;
  min-height: auto;
  color: #958d9e;
}

.listview > li.divider-title:after {
  display: none;
}

.listview.flush {
  border-top: 0;
  border-bottom: 0;
}

.listview.transparent {
  background: transparent;
}

.link-listview > li {
  padding: 0;
  min-height: auto;
}

.link-listview > li a {
  padding: 11px 36px 11px 16px;
  min-height: 50px;
  display: flex;
  width: 100%;
  align-items: center;
  justify-content: space-between;
  color: #27173E !important;
}

.link-listview > li a:after {
  content: "\f3d1";
  font-family: "Ionicons";
  font-size: 18px;
  position: absolute;
  right: 16px;
  height: 18px;
  top: 50%;
  margin-top: -9px;
  line-height: 1em;
  color: #A9ABAD;
  opacity: 0.6;
}

.link-listview > li a:active {
  background: rgba(220, 220, 233, 0.3);
}

.link-listview > li.active a {
  background: rgba(220, 220, 233, 0.3) !important;
}

.image-listview > li {
  padding: 0;
  min-height: auto;
}

.image-listview > li:after {
  left: 68px;
}

.image-listview > li .item {
  padding: 11px 16px;
  width: 100%;
  min-height: 50px;
  display: flex;
  align-items: center;
}

.image-listview > li .item .image {
  width: 36px;
  height: 36px;
  border-radius: 400px;
  margin-right: 16px;
}

.image-listview > li .item .icon-box {
  min-width: 36px;
  max-width: 36px;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 1em;
  font-size: 22px;
  border-radius: 400px;
  margin-right: 16px;
}

.image-listview > li .item .icon-box.transparent {
  font-size: 28px;
  color: #6236FF;
}

.image-listview > li .item .in {
  display: flex;
  align-items: center;
  justify-content: space-between;
  width: 100%;
}

.image-listview > li a.item {
  color: #27173E !important;
  padding-right: 36px;
}

.image-listview > li a.item:active {
  background: rgba(220, 220, 233, 0.3);
}

.image-listview > li a.item:after {
  content: "\f3d1";
  font-family: "Ionicons";
  font-size: 18px;
  position: absolute;
  right: 16px;
  color: #A9ABAD;
  opacity: 0.6;
  line-height: 1em;
  height: 18px;
  top: 50%;
  margin-top: -9px;
}

.image-listview > li.active .item {
  background: rgba(220, 220, 233, 0.3) !important;
}

.image-listview.text > li:after {
  left: 16px;
}

.image-listview.media > li {
  border-bottom: 1px solid #DCDCE9;
}

.image-listview.media > li:last-child {
  border-bottom: 0;
}

.image-listview.media > li .imageWrapper {
  margin-right: 16px;
}

.image-listview.media > li:after {
  display: none;
}

.listview.no-line > li:after,
.listview.no-line .item :after {
  display: none;
}

.listview.no-space > li .item {
  padding: 0;
}

.listview.no-space > li {
  padding-left: 0;
  padding-right: 0;
}

.listview.inset {
  margin-left: 16px;
  margin-right: 16px;
  overflow: hidden;
  border: 0;
  border-radius: 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
}

.card {
  background: #ffffff;
  border-radius: 10px;
  border: 0;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
}

.card .card-body {
  padding: 16px;
}

.card .card-title {
  color: #27173E;
  font-size: 17px;
  font-weight: 500;
}

.card .card-subtitle {
  color: #27173E;
  font-weight: 400;
  font-size: 13px;
}

.card .listview > li:first-child .item {
  border-radius: 10px 10px 0 0;
}

.card .listview > li:last-child .item {
  border-radius: 0 0 10px 10px;
}

.card .card-header {
  background: transparent;
  color: #27173E;
  font-weight: 500;
  padding: 12px 16px;
  border-bottom: 1px solid #DCDCE9;
}

.card .card-footer {
  background: transparent;
  border-top: 1px solid #DCDCE9;
  color: #958d9e;
  padding: 12px 16px;
}

.card .card-img-top {
  border-radius: 10px 10px 0 0;
}

.card .overlay-img {
  border-radius: 10px;
}

.card .card-img-overlay {
  background: rgba(0, 0, 0, 0.5);
  border-radius: 10px;
}

.card .card-img-overlay .card-title {
  color: #fff;
}

.card .card-img-overlay .card-text {
  color: rgba(255, 255, 255, 0.7);
}

.card.bg-primary, .card.bg-secondary, .card.bg-danger, .card.bg-success, .card.bg-warning, .card.bg-info, .card.bg-dark {
  border: 0;
}

.card.bg-primary .card-title, .card.bg-secondary .card-title, .card.bg-danger .card-title, .card.bg-success .card-title, .card.bg-warning .card-title, .card.bg-info .card-title, .card.bg-dark .card-title {
  color: #fff;
}

.card.bg-primary .card-text, .card.bg-secondary .card-text, .card.bg-danger .card-text, .card.bg-success .card-text, .card.bg-warning .card-text, .card.bg-info .card-text, .card.bg-dark .card-text {
  color: rgba(255, 255, 255, 0.7);
}

.card.bg-primary .card-header, .card.bg-secondary .card-header, .card.bg-danger .card-header, .card.bg-success .card-header, .card.bg-warning .card-header, .card.bg-info .card-header, .card.bg-dark .card-header {
  color: #fff;
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}

.card.bg-light {
  background: #fff;
}

.btn {
  height: 36px;
  padding: 3px 18px;
  font-size: 13px;
  line-height: 1.2em;
  font-weight: 500;
  box-shadow: none !important;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  transition: 0.2s all;
  text-decoration: none !important;
  border-radius: 10px;
  border-width: 2px;
}

.btn i.icon,
.btn ion-icon {
  font-size: 22px;
  margin-right: 7px;
  margin-top: -2px;
}

.btn.rounded {
  border-radius: 100px !important;
}

.btn.square {
  border-radius: 0 !important;
}

.btn.shadowed {
  box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.14), 0 2px 1px -1px rgba(0, 0, 0, 0.12), 0 1px 3px 0 rgba(0, 0, 0, 0.2) !important;
}

.btn-lg {
  height: 52px;
  padding: 3px 24px;
  font-size: 15px;
}

.btn-lg i.icon,
.btn-lg ion-icon {
  font-size: 26px;
}

.btn-sm {
  height: 28px;
  padding: 0px 6px;
  font-size: 12px;
}

.btn-sm i.icon,
.btn-sm ion-icon {
  font-size: 20px;
  margin-right: 4px;
}

.btn-block {
  width: 100%;
}

.btn-group .btn:active {
  transform: none;
}

.btn-icon {
  width: 36px;
  height: 36px;
  padding: 0;
}

.btn-icon i.icon,
.btn-icon ion-icon {
  text-align: center;
  margin: 0 !important;
}

.btn-facebook {
  color: #fff !important;
  background: #39579b;
}

.btn-twitter {
  color: #fff !important;
  background: #049ff6;
}

.btn-instagram {
  color: #fff !important;
  background: #df237b;
}

.btn-linkedin {
  color: #fff !important;
  background: #0075aa;
}

.btn-twitch {
  color: #fff !important;
  background: #923cff;
}

.btn-whatsapp {
  color: #fff !important;
  background: #0ad561;
}

.btn-primary {
  background: #6236FF !important;
  border-color: #6236FF !important;
  color: #FFFFFF !important;
}

.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active {
  background: #4e1dff !important;
  border-color: #4e1dff !important;
}

.btn-primary.disabled, .btn-primary:disabled {
  background: #6236FF;
  border-color: #6236FF;
  opacity: 0.5;
}

.btn-secondary {
  background: #8494A8 !important;
  border-color: #8494A8 !important;
  color: #FFFFFF !important;
}

.btn-secondary:hover, .btn-secondary:focus, .btn-secondary:active, .btn-secondary.active {
  background: #75879d !important;
  border-color: #75879d !important;
}

.btn-secondary.disabled, .btn-secondary:disabled {
  background: #8494A8;
  border-color: #8494A8;
  opacity: 0.5;
}

.btn-success {
  background: #1DCC70 !important;
  border-color: #1DCC70 !important;
  color: #FFFFFF !important;
}

.btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.active {
  background: #1ab664 !important;
  border-color: #1ab664 !important;
}

.btn-success.disabled, .btn-success:disabled {
  background: #1DCC70;
  border-color: #1DCC70;
  opacity: 0.5;
}

.btn-danger {
  background: #FF396F !important;
  border-color: #FF396F !important;
  color: #FFFFFF !important;
}

.btn-danger:hover, .btn-danger:focus, .btn-danger:active, .btn-danger.active {
  background: #ff205c !important;
  border-color: #ff205c !important;
}

.btn-danger.disabled, .btn-danger:disabled {
  background: #FF396F;
  border-color: #FF396F;
  opacity: 0.5;
}

.btn-warning {
  color: #fff !important;
  background: #FFB400 !important;
  border-color: #FFB400 !important;
  color: #FFFFFF !important;
}

.btn-warning:hover, .btn-warning:focus, .btn-warning:active, .btn-warning.active {
  background: #e6a200 !important;
  border-color: #e6a200 !important;
}

.btn-warning.disabled, .btn-warning:disabled {
  background: #FFB400;
  border-color: #FFB400;
  opacity: 0.5;
}

.btn-link {
  color: #6236FF !important;
}

.btn-info {
  background: #05D0A4 !important;
  border-color: #05D0A4 !important;
  color: #FFFFFF !important;
}

.btn-info:hover, .btn-info:focus, .btn-info:active, .btn-info.active {
  background: #04b790 !important;
  border-color: #04b790 !important;
}

.btn-info.disabled, .btn-info:disabled {
  background: #05D0A4;
  border-color: #05D0A4;
  opacity: 0.5;
}

.btn-dark {
  background: #333 !important;
  border-color: #333 !important;
  color: #FFFFFF !important;
}

.btn-dark:hover, .btn-dark:focus, .btn-dark:active, .btn-dark.active {
  background: #262626 !important;
  border-color: #262626 !important;
}

.btn-dark.disabled, .btn-dark:disabled {
  background: #333;
  border-color: #333;
  opacity: 0.5;
}

.btn-light {
  background: rgba(255, 255, 255, 0.5) !important;
  border-color: rgba(255, 255, 255, 0.5) !important;
  color: #FFFFFF !important;
  color: #27173E !important;
}

.btn-light:hover, .btn-light:focus, .btn-light:active, .btn-light.active {
  background: rgba(242, 242, 242, 0.5) !important;
  border-color: rgba(242, 242, 242, 0.5) !important;
}

.btn-light.disabled, .btn-light:disabled {
  background: rgba(255, 255, 255, 0.5);
  border-color: rgba(255, 255, 255, 0.5);
  opacity: 0.5;
}

.btn-outline-primary {
  background: transparent;
  border-color: #6236FF;
  color: #6236FF;
  transition: 0.2s all;
}

.btn-outline-primary:hover, .btn-outline-primary:active {
  background: rgba(98, 54, 255, 0.15) !important;
  border-color: #6236FF !important;
  color: #6236FF !important;
}

.btn-outline-primary.active {
  background: #6236FF !important;
  color: #FFF !important;
  border-color: #6236FF !important;
}

.btn-outline-primary.disabled, .btn-outline-primary:disabled {
  color: #6236FF !important;
  border-color: #6236FF !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-secondary {
  background: transparent;
  border-color: #8494A8;
  color: #8494A8;
  transition: 0.2s all;
}

.btn-outline-secondary:hover, .btn-outline-secondary:active {
  background: rgba(132, 148, 168, 0.15) !important;
  border-color: #8494A8 !important;
  color: #8494A8 !important;
}

.btn-outline-secondary.active {
  background: #8494A8 !important;
  color: #FFF !important;
  border-color: #8494A8 !important;
}

.btn-outline-secondary.disabled, .btn-outline-secondary:disabled {
  color: #8494A8 !important;
  border-color: #8494A8 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-success {
  background: transparent;
  border-color: #1DCC70;
  color: #1DCC70;
  transition: 0.2s all;
}

.btn-outline-success:hover, .btn-outline-success:active {
  background: rgba(29, 204, 112, 0.15) !important;
  border-color: #1DCC70 !important;
  color: #1DCC70 !important;
}

.btn-outline-success.active {
  background: #1DCC70 !important;
  color: #FFF !important;
  border-color: #1DCC70 !important;
}

.btn-outline-success.disabled, .btn-outline-success:disabled {
  color: #1DCC70 !important;
  border-color: #1DCC70 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-danger {
  background: transparent;
  border-color: #FF396F;
  color: #FF396F;
  transition: 0.2s all;
}

.btn-outline-danger:hover, .btn-outline-danger:active {
  background: rgba(255, 57, 111, 0.15) !important;
  border-color: #FF396F !important;
  color: #FF396F !important;
}

.btn-outline-danger.active {
  background: #FF396F !important;
  color: #FFF !important;
  border-color: #FF396F !important;
}

.btn-outline-danger.disabled, .btn-outline-danger:disabled {
  color: #FF396F !important;
  border-color: #FF396F !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-warning {
  background: transparent;
  border-color: #FFB400;
  color: #FFB400;
  transition: 0.2s all;
}

.btn-outline-warning:hover, .btn-outline-warning:active {
  background: rgba(255, 180, 0, 0.15) !important;
  border-color: #FFB400 !important;
  color: #FFB400 !important;
}

.btn-outline-warning.active {
  background: #FFB400 !important;
  color: #FFF !important;
  border-color: #FFB400 !important;
}

.btn-outline-warning.disabled, .btn-outline-warning:disabled {
  color: #FFB400 !important;
  border-color: #FFB400 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-info {
  background: transparent;
  border-color: #05D0A4;
  color: #05D0A4;
  transition: 0.2s all;
}

.btn-outline-info:hover, .btn-outline-info:active {
  background: rgba(5, 208, 164, 0.15) !important;
  border-color: #05D0A4 !important;
  color: #05D0A4 !important;
}

.btn-outline-info.active {
  background: #05D0A4 !important;
  color: #FFF !important;
  border-color: #05D0A4 !important;
}

.btn-outline-info.disabled, .btn-outline-info:disabled {
  color: #05D0A4 !important;
  border-color: #05D0A4 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-light {
  background: transparent;
  border-color: #fff;
  color: #fff;
  transition: 0.2s all;
}

.btn-outline-light:hover, .btn-outline-light:active {
  background: rgba(255, 255, 255, 0.15) !important;
  border-color: #fff !important;
  color: #fff !important;
}

.btn-outline-light.active {
  background: #fff !important;
  color: #FFF !important;
  border-color: #fff !important;
}

.btn-outline-light.disabled, .btn-outline-light:disabled {
  color: #fff !important;
  border-color: #fff !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-outline-light:active {
  color: #27173E !important;
}

.btn-text-primary {
  background: transparent;
  border-color: transparent;
  color: #6236FF !important;
  transition: 0.2s all;
}

.btn-text-primary:hover {
  background: transparent;
}

.btn-text-primary:active, .btn-text-primary.active {
  background: rgba(98, 54, 255, 0.15) !important;
  border-color: transparent !important;
  color: #6236FF !important;
}

.btn-text-primary.disabled, .btn-text-primary:disabled {
  color: #6236FF !important;
  border-color: #6236FF !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-secondary {
  background: transparent;
  border-color: transparent;
  color: #8494A8 !important;
  transition: 0.2s all;
}

.btn-text-secondary:hover {
  background: transparent;
}

.btn-text-secondary:active, .btn-text-secondary.active {
  background: rgba(132, 148, 168, 0.15) !important;
  border-color: transparent !important;
  color: #8494A8 !important;
}

.btn-text-secondary.disabled, .btn-text-secondary:disabled {
  color: #8494A8 !important;
  border-color: #8494A8 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-success {
  background: transparent;
  border-color: transparent;
  color: #1DCC70 !important;
  transition: 0.2s all;
}

.btn-text-success:hover {
  background: transparent;
}

.btn-text-success:active, .btn-text-success.active {
  background: rgba(29, 204, 112, 0.15) !important;
  border-color: transparent !important;
  color: #1DCC70 !important;
}

.btn-text-success.disabled, .btn-text-success:disabled {
  color: #1DCC70 !important;
  border-color: #1DCC70 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-danger {
  background: transparent;
  border-color: transparent;
  color: #FF396F !important;
  transition: 0.2s all;
}

.btn-text-danger:hover {
  background: transparent;
}

.btn-text-danger:active, .btn-text-danger.active {
  background: rgba(255, 57, 111, 0.15) !important;
  border-color: transparent !important;
  color: #FF396F !important;
}

.btn-text-danger.disabled, .btn-text-danger:disabled {
  color: #FF396F !important;
  border-color: #FF396F !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-warning {
  background: transparent;
  border-color: transparent;
  color: #FFB400 !important;
  transition: 0.2s all;
}

.btn-text-warning:hover {
  background: transparent;
}

.btn-text-warning:active, .btn-text-warning.active {
  background: rgba(255, 180, 0, 0.15) !important;
  border-color: transparent !important;
  color: #FFB400 !important;
}

.btn-text-warning.disabled, .btn-text-warning:disabled {
  color: #FFB400 !important;
  border-color: #FFB400 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-info {
  background: transparent;
  border-color: transparent;
  color: #05D0A4 !important;
  transition: 0.2s all;
}

.btn-text-info:hover {
  background: transparent;
}

.btn-text-info:active, .btn-text-info.active {
  background: rgba(5, 208, 164, 0.15) !important;
  border-color: transparent !important;
  color: #05D0A4 !important;
}

.btn-text-info.disabled, .btn-text-info:disabled {
  color: #05D0A4 !important;
  border-color: #05D0A4 !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-text-light {
  background: transparent;
  color: #FFF;
}

.btn-text-light:hover, .btn-text-light:active, .btn-text-light.active {
  color: #FFF;
  background: rgba(255, 255, 255, 0.1);
}

.btn-text-dark {
  background: transparent;
  border-color: transparent;
  color: #27173E !important;
  transition: 0.2s all;
}

.btn-text-dark:hover {
  background: transparent;
}

.btn-text-dark:active, .btn-text-dark.active {
  background: rgba(39, 23, 62, 0.15) !important;
  border-color: transparent !important;
  color: #27173E !important;
}

.btn-text-dark.disabled, .btn-text-dark:disabled {
  color: #27173E !important;
  border-color: #27173E !important;
  background: transparent !important;
  opacity: 0.5;
}

.btn-group .btn {
  margin-left: -2px !important;
}

.btn-check:checked + .btn-outline-primary,
.btn-check:checked + .btn-outline-secondary,
.btn-check:checked + .btn-outline-danger,
.btn-check:checked + .btn-outline-warning,
.btn-check:checked + .btn-outline-success,
.btn-check:checked + .btn-outline-info,
.btn-check:checked + .btn-outline-dark {
  color: #fff !important;
  transition: 0.1s all;
}

.btn-check:checked + .btn-outline-primary {
  background: #6236FF !important;
  border-color: #6236FF !important;
}

.btn-check:checked + .btn-outline-secondary {
  background: #8494A8 !important;
  border-color: #8494A8 !important;
}

.btn-check:checked + .btn-outline-warning {
  background: #FFB400 !important;
  border-color: #FFB400 !important;
}

.btn-check:checked + .btn-outline-danger {
  background: #FF396F !important;
  border-color: #FF396F !important;
}

.btn-check:checked + .btn-outline-success {
  background: #1DCC70 !important;
  border-color: #1DCC70 !important;
}

.btn-check:checked + .btn-outline-info {
  background: #05D0A4 !important;
  border-color: #05D0A4 !important;
}

.btn-check:checked + .btn-outline-dark {
  background: #222 !important;
  border-color: #222 !important;
}

.accordion {
  border-top: 1px solid #DCDCE9;
  border-bottom: 1px solid #DCDCE9;
  background: #fff;
  overflow: hidden;
}

.accordion.accordion-flush {
  background: transparent;
}

.accordion .accordion-collapse {
  border: 0;
}

.accordion .accordion-item {
  border: 0;
}

.accordion .accordion-body {
  padding: 8px 16px 20px 16px;
}

.accordion .accordion-content {
  padding: 0;
}

.accordion .accordion-header {
  position: relative;
}

.accordion .accordion-header .btn,
.accordion .accordion-header .accordion-button {
  box-shadow: none !important;
  justify-content: flex-start !important;
  border-radius: 0 !important;
  width: 100%;
  text-align: left !important;
  font-weight: 400;
  background: transparent !important;
  font-size: 15px;
  padding: 8px 50px 8px 16px;
  border: 0 !important;
  min-height: 50px;
  color: #27173E;
}

.accordion .accordion-header .btn:active,
.accordion .accordion-header .accordion-button:active {
  background: rgba(220, 220, 233, 0.3) !important;
}

.accordion .accordion-header .btn:after,
.accordion .accordion-header .accordion-button:after {
  background: url("data:image/svg+xml,%0A%3Csvg width='10px' height='16px' viewBox='0 0 10 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'%3E%3Cg id='Listview' transform='translate(-112.000000, -120.000000)' stroke='%23A9ABAD' stroke-width='2.178'%3E%3Cpolyline id='Path' points='114 122 120 128 114 134'%3E%3C/polyline%3E%3C/g%3E%3C/g%3E%3C/svg%3E") no-repeat center center !important;
  content: "";
  width: 20px;
  height: 20px;
  font-weight: 700;
  position: absolute;
  right: 10px;
  color: #A9ABAD;
  line-height: 1em;
  transition: 0s all;
  height: 18px;
  top: 50%;
  opacity: 0.5;
  margin-top: -9px;
  transform: rotate(-90deg);
}

.accordion .accordion-header .btn:before,
.accordion .accordion-header .accordion-button:before {
  content: "";
  display: block;
  height: 1px;
  background: transparent;
  position: absolute;
  left: 16px;
  bottom: 1px;
  right: 0;
}

.accordion .accordion-header .btn.collapsed:after,
.accordion .accordion-header .accordion-button.collapsed:after {
  transform: rotate(90deg);
}

.accordion .accordion-header .btn.collapsed:before,
.accordion .accordion-header .accordion-button.collapsed:before {
  background: #DCDCE9;
}

.accordion .accordion-header .btn i.bi,
.accordion .accordion-header .btn i.icon,
.accordion .accordion-header .btn ion-icon,
.accordion .accordion-header .accordion-button i.bi,
.accordion .accordion-header .accordion-button i.icon,
.accordion .accordion-header .accordion-button ion-icon {
  width: 24px;
  font-size: 24px;
  margin-right: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #6236FF;
}

.accordion .accordion-header.bg-primary .accordion-button, .accordion .accordion-header.bg-secondary .accordion-button, .accordion .accordion-header.bg-success .accordion-button, .accordion .accordion-header.bg-warning .accordion-button, .accordion .accordion-header.bg-danger .accordion-button, .accordion .accordion-header.bg-warning .accordion-button, .accordion .accordion-header.bg-info .accordion-button, .accordion .accordion-header.bg-dark .accordion-button {
  color: #FFF;
}

.accordion .accordion-header.bg-primary .accordion-button:before, .accordion .accordion-header.bg-secondary .accordion-button:before, .accordion .accordion-header.bg-success .accordion-button:before, .accordion .accordion-header.bg-warning .accordion-button:before, .accordion .accordion-header.bg-danger .accordion-button:before, .accordion .accordion-header.bg-warning .accordion-button:before, .accordion .accordion-header.bg-info .accordion-button:before, .accordion .accordion-header.bg-dark .accordion-button:before {
  display: none;
}

.accordion .accordion-header.bg-primary .accordion-button:after, .accordion .accordion-header.bg-secondary .accordion-button:after, .accordion .accordion-header.bg-success .accordion-button:after, .accordion .accordion-header.bg-warning .accordion-button:after, .accordion .accordion-header.bg-danger .accordion-button:after, .accordion .accordion-header.bg-warning .accordion-button:after, .accordion .accordion-header.bg-info .accordion-button:after, .accordion .accordion-header.bg-dark .accordion-button:after {
  background: url("data:image/svg+xml,%0A%3Csvg width='10px' height='16px' viewBox='0 0 10 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'%3E%3Cg id='Listview' transform='translate(-112.000000, -120.000000)' stroke='%23FFF' stroke-width='2.178'%3E%3Cpolyline id='Path' points='114 122 120 128 114 134'%3E%3C/polyline%3E%3C/g%3E%3C/g%3E%3C/svg%3E") no-repeat center center !important;
}

.accordion .accordion-item:first-child {
  border-radius: 10px 10px 0 0;
}

.accordion .accordion-item:last-child {
  border-radius: 0 0 10px 10px;
}

.accordion .accordion-item:last-child .accordion-header .accordion-button:before {
  display: none;
}

.inset .accordion {
  border-radius: 10px;
  border: 1px solid #DCDCE9;
}

.modal.action-sheet {
  z-index: 200000;
}

.modal.action-sheet .modal-dialog {
  padding: 0;
  margin: 0;
  bottom: 0;
  position: fixed;
  width: 100%;
  min-width: 100%;
  z-index: 12000;
  transform: translate(0, 100%);
}

.modal.action-sheet.show .modal-dialog {
  transform: translate(0, 0);
}

.modal.action-sheet .close-button {
  width: 40px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 24px;
  position: absolute;
  right: 10px;
  top: 3px;
  color: #A9ABAD;
}

.modal.action-sheet .close-button:hover, .modal.action-sheet .close-button:active {
  color: #958d9e;
}

.modal.action-sheet .modal-content {
  box-shadow: none;
  border: 0;
  border-radius: 0;
  padding-bottom: env(safe-area-inset-bottom);
}

.modal.action-sheet .modal-content .action-sheet-content {
  padding: 20px 16px;
  max-height: 460px;
  overflow: auto;
}

.modal.action-sheet .modal-content .action-sheet-content .iconbox {
  font-size: 64px;
  margin: 10px 0 5px 0;
  text-align: center;
}

.modal.action-sheet .modal-content .modal-header {
  display: block;
  padding: 2px 20px;
}

.modal.action-sheet .modal-content .modal-header .modal-title {
  padding: 0;
  margin: 0;
  text-align: center;
  display: block;
  font-size: 15px;
  padding: 10px 0;
  color: #27173E;
  font-weight: 500;
}

.modal.action-sheet .modal-content .modal-body {
  padding: 0;
}

.action-button-list {
  padding: 0;
  margin: 0;
}

.action-button-list > li {
  display: block;
}

.action-button-list > li .btn {
  padding: 0;
  display: flex;
  width: 100%;
  min-height: 50px;
  font-size: 15px;
  color: #27173E;
  line-height: 1.1em;
  justify-content: space-between;
  font-weight: 400;
  border-radius: 0 !important;
  padding: 10px 16px;
}

.action-button-list > li .btn:active, .action-button-list > li .btn.active {
  background: rgba(220, 220, 233, 0.3);
}

.action-button-list > li .btn.text-primary {
  color: #6236FF !important;
}

.action-button-list > li .btn.text-secondary {
  color: #8494A8 !important;
}

.action-button-list > li .btn.text-danger {
  color: #FF396F !important;
}

.action-button-list > li .btn.text-success {
  color: #1DCC70 !important;
}

.action-button-list > li .btn.text-warning {
  color: #FFB400 !important;
}

.action-button-list > li .btn.text-info {
  color: #05D0A4 !important;
}

.action-button-list > li .btn.text-light {
  color: #fff !important;
}

.action-button-list > li .btn.text-dark {
  color: #27173E !important;
}

.action-button-list > li .btn > span {
  display: flex;
  align-items: center;
  justify-content: flex-start;
}

.action-button-list > li .btn .icon,
.action-button-list > li .btn ion-icon {
  width: 24px !important;
  height: 24px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin-right: 10px;
  margin-left: -5px;
  font-size: 24px;
  line-height: 1em;
}

.action-button-list > li.action-divider {
  height: 1px;
  background: #DCDCE9;
}

.action-sheet.inset .modal-dialog {
  padding: 16px;
}

.action-sheet.inset .modal-dialog .modal-content {
  border-radius: 16px;
  padding-bottom: 0;
  margin-bottom: env(safe-area-inset-bottom);
}

.action-sheet.inset .action-button-list > li:last-child .btn {
  border-radius: 0 0 16px 16px !important;
}

.dialogbox .modal-dialog {
  position: fixed;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  z-index: 12000;
  display: flex;
  overflow: auto;
  align-items: center;
  justify-content: center;
  transform: translate(0, 0) !important;
  transform: scale(0.8) !important;
}

.dialogbox .modal-dialog .form-group {
  text-align: left;
}

.dialogbox .modal-dialog .modal-content {
  max-width: 300px;
  margin: auto;
  max-height: 560px;
  overflow: auto;
  border: 0;
  border-radius: 16px;
}

.dialogbox .modal-dialog .modal-content .btn-list {
  margin: 0;
}

.dialogbox .modal-dialog .modal-content .btn-list .btn {
  padding: 0px 10px;
  min-height: 58px;
  border-radius: 0;
  margin: 0;
  border: 0;
  border-bottom: 1px solid #DCDCE9 !important;
  font-size: 15px;
}

.dialogbox .modal-dialog .modal-content .btn-list .btn:hover, .dialogbox .modal-dialog .modal-content .btn-list .btn:focus, .dialogbox .modal-dialog .modal-content .btn-list .btn:active, .dialogbox .modal-dialog .modal-content .btn-list .btn.active {
  background: rgba(220, 220, 233, 0.3) !important;
}

.dialogbox .modal-dialog .modal-content .btn-list .btn:last-child {
  border-radius: 0 0 16px 16px;
  border-bottom: 0 !important;
}

.dialogbox .modal-dialog .modal-content .btn-inline {
  display: flex;
  margin: 0;
}

.dialogbox .modal-dialog .modal-content .btn-inline .btn {
  width: 100%;
  border-radius: 0;
  min-height: 58px;
  border: 0 !important;
  border-right: 1px solid #DCDCE9 !important;
  font-size: 15px;
}

.dialogbox .modal-dialog .modal-content .btn-inline .btn:hover, .dialogbox .modal-dialog .modal-content .btn-inline .btn:focus, .dialogbox .modal-dialog .modal-content .btn-inline .btn:active, .dialogbox .modal-dialog .modal-content .btn-inline .btn.active {
  background: rgba(220, 220, 233, 0.3) !important;
}

.dialogbox .modal-dialog .modal-content .btn-inline .btn:last-child {
  border-right: 0 !important;
  border-radius: 0 0 16px 0 !important;
}

.dialogbox .modal-dialog .modal-content .btn-inline .btn:first-child {
  border-radius: 0 0 0 16px !important;
}

.dialogbox .modal-dialog .modal-content .modal-header {
  border: 0;
  padding: 20px 20px 10px 20px;
}

.dialogbox .modal-dialog .modal-content .modal-header .modal-title {
  color: #27173E;
  text-align: center;
  margin: 0 auto;
  font-size: 17px;
}

.dialogbox .modal-dialog .modal-content .modal-body {
  padding: 0 20px;
  margin-bottom: 30px;
  text-align: center;
  font-size: 15px;
}

.dialogbox .modal-dialog .modal-content .modal-footer {
  border: 0;
  border-top: 1px solid #DCDCE9;
  padding: 0;
  display: block;
  text-align: right;
}

.dialogbox.show .modal-dialog {
  transform: translate(0, 0) !important;
  transform: scale(1) !important;
}

.modal-icon {
  font-size: 60px;
  line-height: 1em;
  margin-top: 30px;
  margin-bottom: -10px;
  color: #6236FF;
  text-align: center;
}

.modalbox {
  padding-top: env(safe-area-inset-top);
  overflow: hidden;
}

.modalbox .modal-dialog {
  transform: translate(0, 100%) !important;
  min-width: 100%;
  margin: 0;
  transition: 0.5s all !important;
  position: fixed;
  left: 0;
  top: 0;
  right: 0;
  bottom: 0;
  margin-top: env(safe-area-inset-top);
}

.modalbox .modal-dialog .modal-content {
  border-radius: 0;
  border: 0;
  margin: auto;
  overflow: hidden;
  padding-top: 56px;
  position: absolute;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
}

.modalbox .modal-dialog .modal-content .modal-header {
  border: 0;
  padding: 0;
  min-height: 56px;
  padding: 10px 16px;
  border-radius: 0;
  display: flex;
  border-bottom: 1px solid #DCDCE9;
  align-items: center;
  justify-content: space-between;
  margin: 0;
  position: fixed;
  left: 0;
  right: 0;
  top: 0;
  width: 100%;
  z-index: 100;
  background: #FFF;
}

.modalbox .modal-dialog .modal-content .modal-header .modal-title {
  margin: 0;
  color: #27173E;
  font-size: 17px;
}

.modalbox .modal-dialog .modal-content .modal-body {
  padding: 20px 16px;
  overflow: auto;
}

.modalbox.show .modal-dialog {
  transform: translate(0, 0) !important;
}

.panelbox .modal-dialog {
  margin: 0;
  position: fixed;
  left: 0;
  top: 0;
}

.panelbox .modal-dialog .modal-content {
  border: 0;
  border-radius: 0;
  width: 300px;
  height: 100vh;
  overflow: auto;
  padding-top: env(safe-area-inset-top);
}

.panelbox .modal-dialog .modal-content .modal-header {
  border-bottom: 0;
  padding: 10px 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  min-height: 56px;
}

.panelbox .modal-dialog .modal-content .modal-header .modal-title {
  color: #27173E;
}

.panelbox .modal-dialog .modal-content .modal-body {
  padding: 10px 16px;
}

.panelbox.show .modal-dialog {
  transform: translate(0, 0) !important;
}

.panelbox-left .modal-dialog {
  transform: translate(-100%, 0) !important;
}

.panelbox-right .modal-dialog {
  transform: translate(100%, 0) !important;
  left: auto;
  right: 0;
}

.tooltip {
  z-index: 200001;
}

.tooltip .tooltip-inner {
  font-size: 13px;
  padding: 6px 10px;
  border-radius: 10px;
}

.dropdown .dropdown-menu,
.dropup .dropdown-menu {
  border: 1px solid #DCDCE9;
  min-width: 120px;
  padding: 8px 0;
  border-radius: 10px;
  box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
}

.dropdown .dropdown-menu .dropdown-item,
.dropup .dropdown-menu .dropdown-item {
  padding: 9px 16px;
  line-height: 1.2em;
  color: #27173E;
  font-size: 15px;
  display: flex;
  align-items: center;
}

.dropdown .dropdown-menu .dropdown-item:hover, .dropdown .dropdown-menu .dropdown-item:active,
.dropup .dropdown-menu .dropdown-item:hover,
.dropup .dropdown-menu .dropdown-item:active {
  background: rgba(220, 220, 233, 0.5);
  color: #27173E;
}

.dropdown .dropdown-menu .dropdown-item .dropdown-divider,
.dropup .dropdown-menu .dropdown-item .dropdown-divider {
  border-top: 1px solid #DCDCE9;
}

.dropdown .dropdown-menu .dropdown-header,
.dropup .dropdown-menu .dropdown-header {
  padding: 9px 16px;
  color: #958d9e;
  font-weight: 400;
  font-size: 11px;
}

.dropdown .dropdown-menu .text,
.dropup .dropdown-menu .text {
  padding: 9px 16px;
  color: #958d9e;
}

.dropdown .dropdown-menu .icon,
.dropdown .dropdown-menu ion-icon,
.dropup .dropdown-menu .icon,
.dropup .dropdown-menu ion-icon {
  font-size: 17px;
  margin-right: 6px;
  width: 20px;
  height: 20px;
  justify-content: center;
  align-items: center;
  line-height: 1em;
  display: inline-flex;
  color: #27173E;
}

.appHeader .dropdown-menu {
  margin-top: -12px !important;
}

.dropdown-toggle:after {
  border-radius: 4px;
  margin-left: 7px;
}

.bg-primary {
  background: #6236FF !important;
  color: #FFF;
}

.bg-secondary {
  background: #8494A8 !important;
  color: #FFF;
}

.bg-success {
  background: #1DCC70 !important;
  color: #FFF;
}

.bg-danger {
  background: #FF396F !important;
  color: #FFF;
}

.bg-warning {
  background: #FFB400 !important;
  color: #FFF;
}

.bg-info {
  background: #05D0A4 !important;
  color: #FFF;
}

.bg-light {
  background: rgba(255, 255, 255, 0.5) !important;
}

.bg-dark {
  background: #222 !important;
  color: #FFF;
}

.text-primary,
a.text-primary {
  color: #6236FF !important;
}

.text-secondary,
a.text-secondary {
  color: #8494A8 !important;
}

.text-success,
a.text-success {
  color: #1DCC70 !important;
}

.text-danger,
a.text-danger {
  color: #FF396F !important;
}

.text-warning,
a.text-warning {
  color: #FFB400 !important;
}

.text-info,
a.text-info {
  color: #05D0A4 !important;
}

.text-light,
a.text-light {
  color: #FFF !important;
}

.text-dark,
a.text-dark {
  color: #27173E !important;
}

.alert {
  margin: 0;
  padding: 8px 14px;
  border: 0;
  font-size: 13px;
  border-radius: 10px;
}

.alert .btn-close {
  text-shadow: none !important;
  width: 40px;
  padding: 0;
  opacity: 1;
  margin-top: 3px;
  line-height: 1em;
  height: 36px !important;
  outline: 0 !important;
  box-shadow: none !important;
  background: none;
}

.alert .btn-close:hover, .alert .btn-close:active, .alert .btn-close:focus {
  outline: 0 !important;
}

.alert .btn-close:hover {
  opacity: .7;
}

.alert .btn-close:before, .alert .btn-close:after {
  position: absolute;
  width: 16px;
  height: 2px;
  left: 12px;
  top: 16px;
  content: '';
  display: block;
  background: #FFF;
  border-radius: 20px;
}

.alert .btn-close:before {
  transform: rotate(45deg);
}

.alert .btn-close:after {
  transform: rotate(-45deg);
}

.alert .alert-title {
  margin: 4px 0;
  font-size: 15px;
  font-weight: 500;
}

.alert.alert-dismissible {
  padding-right: 56px;
}

.alert-imaged {
  display: flex;
}

.alert-imaged .img-wrap {
  margin-right: 10px;
}

.alert-imaged .img-wrap .imaged {
  width: 24px;
  height: 24px;
}

.alert-imaged .icon-wrap {
  margin-right: 10px;
  width: 24px;
  height: 24px;
}

.alert-imaged .icon-wrap i.icon,
.alert-imaged .icon-wrap ion-icon {
  font-size: 24px;
  margin: 0;
}

.alert-primary {
  background: #6236FF;
  color: #fff;
  border: 1px solid #6236FF;
}

.alert-primary a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-primary .alert-title {
  color: #FFF;
}

.alert-primary .close {
  color: #FFF;
}

.alert-outline-primary {
  background: transparent;
  color: #6236FF;
  border: 2px solid #6236FF;
}

.alert-outline-primary a {
  color: #6236FF !important;
  text-decoration: underline !important;
}

.alert-outline-primary .alert-title {
  color: #6236FF;
}

.alert-outline-primary .btn-close {
  color: #6236FF;
  opacity: 1;
}

.alert-outline-primary .btn-close:before, .alert-outline-primary .btn-close:after {
  background: #6236FF;
}

.alert-secondary {
  background: #8494A8;
  color: #fff;
  border: 1px solid #8494A8;
}

.alert-secondary a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-secondary .alert-title {
  color: #FFF;
}

.alert-secondary .close {
  color: #FFF;
}

.alert-outline-secondary {
  background: transparent;
  color: #8494A8;
  border: 2px solid #8494A8;
}

.alert-outline-secondary a {
  color: #8494A8 !important;
  text-decoration: underline !important;
}

.alert-outline-secondary .alert-title {
  color: #8494A8;
}

.alert-outline-secondary .btn-close {
  color: #8494A8;
  opacity: 1;
}

.alert-outline-secondary .btn-close:before, .alert-outline-secondary .btn-close:after {
  background: #8494A8;
}

.alert-success {
  background: #1DCC70;
  color: #fff;
  border: 1px solid #1DCC70;
}

.alert-success a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-success .alert-title {
  color: #FFF;
}

.alert-success .close {
  color: #FFF;
}

.alert-outline-success {
  background: transparent;
  color: #1DCC70;
  border: 2px solid #1DCC70;
}

.alert-outline-success a {
  color: #1DCC70 !important;
  text-decoration: underline !important;
}

.alert-outline-success .alert-title {
  color: #1DCC70;
}

.alert-outline-success .btn-close {
  color: #1DCC70;
  opacity: 1;
}

.alert-outline-success .btn-close:before, .alert-outline-success .btn-close:after {
  background: #1DCC70;
}

.alert-danger {
  background: #FF396F;
  color: #fff;
  border: 1px solid #FF396F;
}

.alert-danger a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-danger .alert-title {
  color: #FFF;
}

.alert-danger .close {
  color: #FFF;
}

.alert-outline-danger {
  background: transparent;
  color: #FF396F;
  border: 2px solid #FF396F;
}

.alert-outline-danger a {
  color: #FF396F !important;
  text-decoration: underline !important;
}

.alert-outline-danger .alert-title {
  color: #FF396F;
}

.alert-outline-danger .btn-close {
  color: #FF396F;
  opacity: 1;
}

.alert-outline-danger .btn-close:before, .alert-outline-danger .btn-close:after {
  background: #FF396F;
}

.alert-warning {
  background: #FFB400;
  color: #fff;
  border: 1px solid #FFB400;
}

.alert-warning a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-warning .alert-title {
  color: #FFF;
}

.alert-warning .close {
  color: #FFF;
}

.alert-outline-warning {
  background: transparent;
  color: #FFB400;
  border: 2px solid #FFB400;
}

.alert-outline-warning a {
  color: #FFB400 !important;
  text-decoration: underline !important;
}

.alert-outline-warning .alert-title {
  color: #FFB400;
}

.alert-outline-warning .btn-close {
  color: #FFB400;
  opacity: 1;
}

.alert-outline-warning .btn-close:before, .alert-outline-warning .btn-close:after {
  background: #FFB400;
}

.alert-info {
  background: #05D0A4;
  color: #fff;
  border: 1px solid #05D0A4;
}

.alert-info a {
  color: #fff !important;
  text-decoration: underline;
}

.alert-info .alert-title {
  color: #FFF;
}

.alert-info .close {
  color: #FFF;
}

.alert-outline-info {
  background: transparent;
  color: #05D0A4;
  border: 2px solid #05D0A4;
}

.alert-outline-info a {
  color: #05D0A4 !important;
  text-decoration: underline !important;
}

.alert-outline-info .alert-title {
  color: #05D0A4;
}

.alert-outline-info .btn-close {
  color: #05D0A4;
  opacity: 1;
}

.alert-outline-info .btn-close:before, .alert-outline-info .btn-close:after {
  background: #05D0A4;
}

.alert-light {
  background: #FFF;
  color: #27173E;
}

.alert-dark {
  background: #333;
  color: #FFF;
}

.alert-dark a {
  color: #FFF !important;
  text-decoration: underline !important;
}

.alert-outline-dark {
  background: transparent;
  color: #333;
  border: 2px solid #333;
}

.table-responsive {
  border-radius: 10px;
}

.table {
  color: #958d9e;
  margin: 0;
  font-size: 13px;
  line-height: 1.4em;
  border-radius: 10px;
}

.table tr {
  border-color: #DCDCE9;
}

.table thead th {
  border-top: 0;
  border-bottom: 0;
  color: #27173E;
  font-weight: 500;
}

.table td,
.table th {
  border-top: 1px solid #DCDCE9;
  padding: 12px;
}

.table-striped > tbody > tr:nth-of-type(odd) {
  background: rgba(220, 220, 233, 0.1);
  color: #958d9e;
}

.table-bordered {
  border-radius: 0px;
}

.table-bordered td,
.table-bordered th {
  border-color: #DCDCE9;
}

.table.bg-primary,
.table.bg-secondary,
.table.bg-success,
.table.bg-danger,
.table.bg-warning,
.table.bg-info {
  color: rgba(255, 255, 255, 0.8) !important;
}

.table.bg-primary tr,
.table.bg-primary td,
.table.bg-primary th,
.table.bg-secondary tr,
.table.bg-secondary td,
.table.bg-secondary th,
.table.bg-success tr,
.table.bg-success td,
.table.bg-success th,
.table.bg-danger tr,
.table.bg-danger td,
.table.bg-danger th,
.table.bg-warning tr,
.table.bg-warning td,
.table.bg-warning th,
.table.bg-info tr,
.table.bg-info td,
.table.bg-info th {
  border-bottom-color: rgba(255, 255, 255, 0.2);
}

.table.bg-primary td,
.table.bg-primary th,
.table.bg-secondary td,
.table.bg-secondary th,
.table.bg-success td,
.table.bg-success th,
.table.bg-danger td,
.table.bg-danger th,
.table.bg-warning td,
.table.bg-warning th,
.table.bg-info td,
.table.bg-info th {
  border-top-color: rgba(255, 255, 255, 0.2);
}

.table.bg-primary thead tr th,
.table.bg-secondary thead tr th,
.table.bg-success thead tr th,
.table.bg-danger thead tr th,
.table.bg-warning thead tr th,
.table.bg-info thead tr th {
  color: #fff;
  font-weight: 500;
}

textarea,
.form-control {
  background-clip: padding-box;
  background-image: linear-gradient(transparent, transparent);
}

.form-group {
  width: 100%;
}

.form-group .label {
  font-size: 11px;
  margin: 0;
  font-weight: 500;
  color: #27173E;
  display: block;
  line-height: 1.2em;
  text-align: left;
}

.form-group textarea {
  resize: none;
}

.form-group .input-info {
  font-size: 11px;
  color: #A9ABAD;
}

.form-group .clear-input {
  display: flex;
  align-items: center;
  justify-content: center;
  color: #958d9e;
  height: 38px;
  font-size: 22px;
  position: absolute;
  right: -10px;
  bottom: 0;
  width: 32px;
  opacity: 0.5;
  display: none;
}

.form-group .clear-input:hover, .form-group .clear-input:active {
  opacity: 0.8;
}

.form-group .input-wrapper {
  position: relative;
}

.form-group .input-wrapper.not-empty .clear-input {
  display: flex;
}

.form-group .input-wrapper.active .label {
  color: #6236FF !important;
}

.form-group.basic {
  padding: 8px 0;
  margin: 0;
}

.form-group.basic .form-control,
.form-group.basic .custom-select {
  background: transparent;
  border: none;
  border-bottom: 1px solid #DCDCE9;
  padding: 0 30px 0 0;
  border-radius: 0;
  height: 40px;
  color: #27173E;
  font-size: 15px;
}

.form-group.basic .form-control:focus,
.form-group.basic .custom-select:focus {
  border-bottom-color: #6236FF;
  box-shadow: inset 0 -1px 0 0 #6236FF;
}

.form-group.basic .custom-select {
  padding-right: 0;
}

.form-group.basic textarea.form-control {
  height: auto;
  padding: 7px 40px 7px 0;
}

.form-group.basic.animated .label {
  margin-top: 20px;
  opacity: 0;
  top: -3px;
  transition: 0.2s all;
  position: absolute;
}

.form-group.basic.animated .input-wrapper {
  padding-top: 5px;
}

.form-group.basic.animated .input-wrapper.not-empty .label {
  margin-top: 0;
  opacity: 1;
}

.verification-input {
  font-size: 32px !important;
  letter-spacing: 10px;
  text-align: center;
  border-radius: 10px !important;
  border: 1px solid #DCDCE9 !important;
  width: 180px !important;
  padding: 0 10px !important;
  margin: auto;
  min-height: 70px !important;
  font-weight: 700;
  color: #27173E !important;
  box-shadow: none !important;
  background: #FFF !important;
}

.verification-input:focus {
  border-color: #27173E !important;
}

.form-control-lg {
  font-size: 20px !important;
}

.input-group .input-group-text {
  background: transparent;
  border: 0;
  border-bottom: 1px solid #DCDCE9;
  border-radius: 0;
  font-weight: 400;
  color: #27173E;
  height: 40px;
  width: auto;
  padding: 0 10px 0 0;
}

.custom-file-upload {
  position: relative;
  display: flex;
  width: 100%;
  height: 220px;
}

.custom-file-upload input[type="file"] {
  overflow: hidden;
  opacity: 0;
  position: absolute;
  top: 0;
  left: 0;
  width: 0;
  height: 0;
}

.custom-file-upload label {
  z-index: 1;
  position: absolute;
  left: 0;
  top: 0;
  bottom: 0;
  right: 0;
  overflow: hidden;
  background-color: rgba(220, 220, 233, 0.2);
  background-size: 45px 58px;
  border: 1px solid #DCDCE9;
  border-radius: 10px;
  margin: 0;
}

.custom-file-upload label span {
  display: block;
  font-size: 15px;
  color: #A9ABAD;
  height: auto;
  position: absolute;
  top: 50%;
  left: 0;
  right: 0;
  font-weight: 500;
  transform: translate(0%, -50%);
  align-items: center;
  justify-content: center;
  padding: 10px 16px;
  width: 100%;
  text-align: center;
  border-radius: 0;
}

.custom-file-upload label span .icon,
.custom-file-upload label span ion-icon {
  --ionicon-stroke-width: 32px;
  font-size: 48px;
  color: #A9ABAD;
}

.custom-file-upload label span strong {
  display: block;
  font-weight: 500;
}

.custom-file-upload label span i {
  font-style: normal;
  display: block;
}

.custom-file-upload label.file-uploaded {
  background-size: cover;
  background-position: center;
}

.custom-file-upload label.file-uploaded:before {
  content: '';
  width: 38px;
  height: 38px;
  background: #1DCC70;
  border-radius: 100%;
  display: flex;
  background-image: url("data:image/svg+xml,%0A%3Csvg width='23px' height='20px' viewBox='0 0 23 20' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'%3E%3Cpolyline id='Path' stroke='%23FFFFFF' stroke-width='2.4' points='21.2 2 7.76 18 2 12'%3E%3C/polyline%3E%3C/g%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center center;
  position: absolute;
  left: 50%;
  top: calc(50% + -22px);
  transform: translate(-50%, -50%);
}

.custom-file-upload label.file-uploaded label {
  border-color: transparent;
}

.custom-file-upload label.file-uploaded span {
  bottom: 0;
  left: 0;
  top: auto;
  transform: translate(0, 0);
  font-size: 11px;
  color: #958d9e;
  background-color: #DCDCE9;
}

.form-group.boxed {
  margin: 0;
  padding: 8px 0;
}

.form-group.boxed .form-control {
  background: #fff;
  box-shadow: none;
  height: 42px;
  border-radius: 10px;
  padding: 0 40px 0 16px;
}

.form-group.boxed .form-control:focus {
  border-color: #6236FF;
}

.form-group.boxed textarea.form-control {
  height: auto;
  padding: 7px 40px 7px 16px;
}

.form-group.boxed .clear-input {
  right: 0;
  height: 42px;
  width: 40px;
}

.form-group.boxed .label {
  margin-bottom: 8px;
}

.nav-tabs {
  width: 100%;
}

.nav-tabs.style1 {
  border: 0;
  background: rgba(220, 220, 233, 0.4);
  border-radius: 10px;
  display: flex;
}

.nav-tabs.style1 .nav-item {
  flex: 1;
  width: 100%;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
}

.nav-tabs.style1 .nav-item .nav-link {
  color: #958d9e;
  font-weight: 500;
  font-size: 13px;
  border: 0 !important;
  line-height: 1.2em;
  width: 100%;
  border-radius: 10px;
  padding: 6px 10px;
  height: 30px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 4px !important;
}

.nav-tabs.style1 .nav-item .nav-link .icon,
.nav-tabs.style1 .nav-item .nav-link ion-icon {
  margin-right: 8px;
  margin-left: 8px;
  line-height: 1em;
  font-size: 18px;
}

.nav-tabs.style1 .nav-item .nav-link.active {
  color: #27173E;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.12), 0 2px 1px 0 rgba(0, 0, 0, 0.04);
}

.nav-tabs {
  width: 100%;
}

.nav-tabs.lined {
  border: 0;
  background: transparent;
  border-radius: 0;
  display: flex;
}

.nav-tabs.lined .nav-item {
  flex: 1;
  width: 100%;
  text-align: center;
  display: flex;
  justify-content: center;
  align-items: center;
  margin: 0;
  padding: 0;
}

.nav-tabs.lined .nav-item .nav-link {
  color: #958d9e;
  font-weight: 500;
  font-size: 13px;
  border: 0 !important;
  border-bottom: 2px solid transparent !important;
  line-height: 1.2em;
  width: 100%;
  border-radius: 0;
  padding: 6px 10px;
  height: 50px;
  display: flex;
  align-items: center;
  justify-content: center;
  margin: 0 !important;
  border-bottom-color: 2px solid;
}

.nav-tabs.lined .nav-item .nav-link .icon,
.nav-tabs.lined .nav-item .nav-link ion-icon {
  margin-right: 8px;
  margin-left: 8px;
  line-height: 1em;
  font-size: 18px;
}

.nav-tabs.lined .nav-item .nav-link.active {
  color: #6236FF;
  background: transparent;
  border-bottom-color: #6236FF !important;
}

.form-check {
  padding: 0;
  margin: 0;
  min-height: auto;
  height: auto;
}

.form-check .form-check-input {
  display: none;
}

.form-check .form-check-label {
  cursor: pointer;
  position: relative;
  min-height: 20px;
  padding: 0px 0 0 32px;
  line-height: 1.7em;
  color: #27173E;
}

.form-check .form-check-label:after {
  position: absolute;
  left: 0;
  top: 0;
  content: "";
  display: block;
  width: 22px;
  height: 22px;
  background: transparent;
  border-radius: 100px;
  border: 1px solid #DCDCE9;
}

.form-check .form-check-label:before {
  content: "";
  display: block;
  width: 22px;
  height: 22px;
  position: absolute;
  left: 0;
  top: 0;
  z-index: 3;
  opacity: 0;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 20 20'%3e%3cpath fill='none' stroke='%23fff' stroke-linecap='round' stroke-linejoin='round' stroke-width='3' d='M6 10l3 3l6-6'/%3e%3c/svg%3e");
}

.form-check-input[type="radio"] ~ .form-check-label:before {
  background-image: url("data:image/svg+xml,%0A%3Csvg width='8px' height='8px' viewBox='0 0 8 8' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd'%3E%3Ccircle id='Oval' fill='%23FFFFFF' cx='4' cy='4' r='4'%3E%3C/circle%3E%3C/g%3E%3C/svg%3E");
  background-repeat: no-repeat;
  background-position: center center;
}

.form-check-input:checked ~ .form-check-label:after {
  background-color: #6236FF;
  border-color: #6236FF !important;
}

.form-check-input:checked ~ .form-check-label:before {
  opacity: 1;
}

.form-check-inline {
  margin-right: 0;
}

.form-check-inline .form-check-label {
  margin-bottom: -3px;
  padding-left: 24px;
}

.input-list .form-check:after {
  content: "";
  height: 1px;
  background: #DCDCE9;
  display: block;
  margin-left: 54px;
}

.input-list .form-check .form-check-label {
  min-height: 50px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  transition: 0.1s all;
  padding: 6px 16px 6px 54px;
}

.input-list .form-check .form-check-label:before, .input-list .form-check .form-check-label:after {
  left: 16px;
  top: 14px;
}

.input-list .form-check .form-check-label:active {
  background: rgba(220, 220, 233, 0.3);
}

.input-list .form-check:last-child:after {
  height: 0;
}

.form-switch {
  height: 30px;
}

.form-switch .form-check-label {
  width: 56px;
  height: 30px;
  padding: 0;
  margin: 0;
}

.form-switch .form-check-label:after {
  height: 30px;
  width: 56px;
  background: #DCDCE9;
  border: 1px solid #ccccdf;
  transition: .1s linear;
}

.form-switch .form-check-label:before {
  opacity: 1;
  border-radius: 100px;
  width: 24px;
  height: 24px;
  top: 3px;
  left: 4px;
  background: #ffffff;
  box-shadow: 0 3px 6px 0 rgba(0, 0, 0, 0.1), 0 1px 3px 0 rgba(0, 0, 0, 0.08);
  transition: .15s ease-in-out;
}

.form-switch .form-check-input:checked ~ .form-check-label:before {
  left: 28px;
}

.message-divider {
  font-size: 12px;
  text-align: center;
  padding: 5px 0;
  color: #A9ABAD;
}

.message-item {
  display: flex;
  align-items: flex-end;
  justify-content: flex-start;
  padding: 6px 16px;
  margin-right: 60px;
}

.message-item .bubble {
  padding: 12px 12px;
  background: #DCDCE9;
  border-radius: 24px 24px 24px 0;
  color: #27173E;
  display: inline-block;
  margin-top: 4px;
  line-height: 1.4em;
}

.message-item .title {
  font-size: 12px;
  font-weight: 500;
  color: #958d9e;
  line-height: 1.2em;
  padding: 0 0 0 10px;
}

.message-item .footer {
  font-size: 12px;
  padding: 0 10px;
  text-align: right;
  line-height: 1em;
  margin-top: 5px;
  color: #27173E;
  opacity: .4;
  height: 14px;
}

.message-item .avatar {
  margin-right: 10px;
  width: 32px;
  height: auto;
  border-radius: 100%;
  margin-bottom: 18px;
}

.message-item.user {
  justify-content: flex-end;
  margin-right: 0;
  margin-left: 60px;
}

.message-item.user .bubble {
  background: #6236FF !important;
  color: #FFF;
  border-radius: 16px 16px 0 16px;
}

.chatFooter {
  min-height: 56px;
  background: #FFF;
  border-top: 1px solid #DCDCE9;
  position: fixed;
  left: 0;
  right: 0;
  bottom: 0;
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 14px;
  padding-bottom: env(safe-area-inset-bottom);
}

.chatFooter .form-group {
  width: calc(100% - 100px);
}

.chatFooter form {
  width: 100%;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.progress {
  height: 14px;
  border-radius: 10px;
}

.progress-bar {
  background: #6236FF;
  height: 14px;
  line-height: 1em;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 10px;
  font-weight: 500;
  letter-spacing: 0;
}

.chip {
  background: #DCDCE9;
  font-size: 13px;
  color: #27173E;
  line-height: 1em;
  height: 26px;
  display: inline-flex;
  align-items: center;
  justify-content: space-between;
  padding: 0;
  border-radius: 100px;
}

.chip .chip-label {
  padding: 0 12px;
}

.chip.chip-outline {
  background: transparent !important;
  box-shadow: inset 0 0 0 1px #DCDCE9;
}

.chip.chip-media {
  position: relative;
  padding-left: 20px;
}

.chip.chip-media img {
  width: 25px;
  height: 25px;
  border-radius: 100px;
  position: absolute;
  left: 0;
  top: 0;
}

.chip .chip-icon {
  position: absolute;
  left: 0;
  top: 0;
  width: 26px;
  height: 26px;
  margin: 0;
  display: flex;
  align-items: center;
  justify-content: center;
  border-radius: 100px;
  background: #958d9e;
  color: #fff;
  font-size: 14px;
}

.chip .chip-delete {
  width: 26px;
  margin-left: -10px;
  height: 26px;
  display: inline-flex;
  color: #27173E;
  opacity: 0.7;
  align-items: center;
  justify-content: center;
  font-size: 16px;
  border-radius: 100px;
}

.chip .chip-delete:hover, .chip .chip-delete:active {
  opacity: 1;
}

.chip-primary {
  background: #6236FF !important;
  color: #fff;
}

.chip-primary .chip-delete {
  color: #fff;
}

.chip-primary.chip-outline {
  color: #6236FF !important;
  box-shadow: inset 0 0 0 1px #6236FF !important;
}

.chip-danger {
  background: #FF396F !important;
  color: #fff;
}

.chip-danger .chip-delete {
  color: #fff;
}

.chip-danger.chip-outline {
  color: #FF396F !important;
  box-shadow: inset 0 0 0 1px #FF396F !important;
}

.chip-success {
  background: #1DCC70 !important;
  color: #fff;
}

.chip-success .chip-delete {
  color: #fff;
}

.chip-success.chip-outline {
  color: #1DCC70 !important;
  box-shadow: inset 0 0 0 1px #1DCC70 !important;
}

.chip-warning {
  background: #FFB400 !important;
  color: #fff;
}

.chip-warning .chip-delete {
  color: #fff;
}

.chip-warning.chip-outline {
  color: #FFB400 !important;
  box-shadow: inset 0 0 0 1px #FFB400 !important;
}

.chip-info {
  background: #05D0A4 !important;
  color: #fff;
}

.chip-info .chip-delete {
  color: #fff;
}

.chip-info.chip-outline {
  color: #05D0A4 !important;
  box-shadow: inset 0 0 0 1px #05D0A4 !important;
}

.chip-light {
  background: #fff !important;
  color: #222 !important;
}

.chip-light .chip-delete {
  color: #222 !important;
}

.chip-light.chip-outline {
  color: #fff !important;
  box-shadow: inset 0 0 0 1px #fff !important;
}

.chip-dark {
  background: #222 !important;
  color: #fff;
}

.chip-dark .chip-delete {
  color: #fff;
}

.chip-dark.chip-outline {
  color: #222 !important;
  box-shadow: inset 0 0 0 1px #222 !important;
}

#search {
  display: block;
  padding: 10px 16px 0 16px;
  top: -100px;
  transition: .2s all ease-in-out;
  margin-top: env(safe-area-inset-top);
}

#search.show {
  display: block;
  top: 0;
}

.search-form {
  display: block;
  width: 100%;
}

.searchbox {
  width: 100%;
  margin: 0;
  position: relative;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.searchbox .form-control {
  box-shadow: none;
  border-radius: 10px;
  border: 1px solid #bdbdd5;
  height: 36px;
  padding: 0 16px 0 36px;
}

.searchbox .form-control:focus {
  border-color: #adadcb;
}

.searchbox .form-control:focus ~ .input-icon {
  color: #27173E;
}

.searchbox .icon {
  font-size: 26px;
  line-height: 1em;
  margin: 0;
}

.searchbox .close {
  opacity: 1;
  color: #A9ABAD;
}

.searchbox .input-icon {
  font-size: 26px;
  position: absolute;
  left: 0;
  width: 36px;
  height: 36px;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #A9ABAD;
  top: 0;
}

.splide {
  margin-bottom: -20px !important;
}

.splide:active {
  cursor: grab;
}

.splide .splide__list {
  padding-bottom: 20px !important;
}

.carousel-single .splide__slide {
  margin-left: -16px !important;
  padding-right: 16px !important;
}

.carousel-multiple .splide__slide {
  margin-left: -8px !important;
  padding-right: 8px !important;
}

.carousel-small .splide__slide {
  margin-left: -8px !important;
  padding-right: 0px !important;
}

.carousel-small .splide__slide:first-child {
  margin-left: 24px !important;
}

.carousel-slider {
  text-align: center;
}

.carousel-slider .splide__list {
  padding-bottom: 100px !important;
}

.carousel-slider .imaged.w-100 {
  max-width: 400px;
  margin-left: auto;
  margin-right: auto;
}

.carousel-slider .splide__pagination {
  position: fixed;
  width: 100%;
  bottom: 120px;
}

.carousel-slider .splide__pagination button {
  background: #DCDCE9;
  margin: 0 5px !important;
}

.carousel-slider .splide__pagination button.is-active {
  background: #A9ABAD;
  transform: scale(1);
}

.carousel-button-footer {
  min-height: 84px;
  padding-left: 8px;
  padding-right: 8px;
  padding-bottom: env(safe-area-inset-bottom);
  width: 100%;
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  z-index: 990;
  left: 0;
  bottom: 0;
  right: 0;
}

.carousel-button-footer > div {
  width: 100%;
}

.form-button-group {
  position: fixed;
  display: flex;
  align-items: center;
  justify-content: center;
  bottom: 0;
  left: 0;
  right: 0;
  width: 100%;
  padding: 0 16px;
  background: #FFF;
  min-height: 84px;
  padding-bottom: env(safe-area-inset-bottom);
}

.form-button-group.transparent {
  background: transparent !important;
}

.form-links {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  font-size: 14px;
}

.timeline {
  position: relative;
  padding: 24px 0;
}

.timeline:before {
  content: '';
  display: block;
  position: absolute;
  width: 2px;
  left: 0;
  bottom: 0;
  top: 0;
  background: #DCDCE9;
  z-index: 1;
}

.timeline .item {
  position: relative;
  margin-bottom: 30px;
}

.timeline .item:last-child {
  margin-bottom: 0;
}

.timeline .content {
  padding-left: 20px;
}

.timeline .content .title {
  margin-bottom: 8px;
  line-height: 1.3em;
}

.timeline .content .text {
  font-size: 13px;
  line-height: 1.4em;
}

.timeline .dot {
  width: 12px;
  height: 12px;
  border-radius: 100%;
  position: absolute;
  background: #A9ABAD;
  left: -5px;
  top: 4px;
  z-index: 10;
}

.timeline.timed {
  padding-left: 80px;
}

.timeline.timed:before {
  left: 80px;
}

.timeline.timed .time {
  font-size: 11px;
  position: absolute;
  left: -80px;
  line-height: 1.5em;
  width: 70px;
  text-align: right;
  top: 1px;
  z-index: 20;
}

.toast-box {
  position: fixed;
  left: 0;
  top: -100%;
  right: 0;
  width: 100%;
  z-index: 600;
  min-height: 52px;
  margin-top: env(safe-area-inset-top);
  transition: 0.2s all;
  background: rgba(0, 0, 0, 0.85);
  font-size: 13px;
  color: rgba(255, 255, 255, 0.75);
  padding: 10px 16px;
  line-height: 1.4em;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.toast-box .toast-title {
  font-size: 15px;
  color: #fff;
}

.toast-box .btn {
  font-size: 13px;
  font-weight: 500;
}

.toast-box.show {
  top: 0;
}

.toast-box .in {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  padding-right: 20px;
}

.toast-box .in i.icon,
.toast-box .in ion-icon {
  font-size: 26px;
  width: 32px;
  height: 32px;
  margin-right: 8px;
  color: #fff;
}

.toast-box .in .text {
  width: 100%;
}

.toast-box.toast-top.show {
  top: 56px;
}

.toast-box.toast-bottom {
  top: auto;
  bottom: -100%;
}

.toast-box.toast-bottom.show {
  bottom: 56px;
  top: auto;
  margin-bottom: env(safe-area-inset-bottom);
}

.toast-box.toast-center {
  width: auto;
  left: auto;
  right: auto;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  display: none;
  padding: 16px 24px;
  border-radius: 10px;
  text-align: center;
}

.toast-box.toast-center.show {
  display: block;
  transform: translate(-50%, -50%);
}

.toast-box.toast-center .in {
  padding: 0;
  display: block;
}

.toast-box.toast-center .in i.icon,
.toast-box.toast-center .in ion-icon {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  margin: 0 0 10px 0;
  font-size: 56px;
  width: 64px;
  height: 64px;
}

.toast-box.toast-center .btn {
  margin-top: 20px;
}

.extra-header-active .toast-box.toast-top.show {
  top: 95px;
}

.notification-box {
  position: fixed;
  left: 0;
  top: -100%;
  right: 0;
  width: 100%;
  z-index: 9999;
  transition: 0.3s all;
  margin-top: env(safe-area-inset-top);
}

.notification-box.show {
  top: 0;
}

.notification-dialog.android-style {
  background: #ffffff;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.1), 0 11px 25px 0 rgba(0, 0, 0, 0.18);
  padding: 20px 16px 24px 16px;
}

.notification-dialog.android-style .notification-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.notification-dialog.android-style .notification-header .in {
  display: flex;
  align-items: center;
}

.notification-dialog.android-style .notification-header .in .imaged {
  margin-right: 8px;
}

.notification-dialog.android-style .notification-header .in strong {
  font-size: 13px;
  font-weight: 400;
  color: #27173E;
}

.notification-dialog.android-style .notification-header .in span {
  display: inline-flex;
  align-items: center;
  margin-left: 6px;
  font-size: 11px;
}

.notification-dialog.android-style .notification-header .in span:before {
  display: inline-flex;
  align-items: center;
  margin-right: 6px;
  content: "•";
}

.notification-dialog.android-style .notification-header .close-button {
  display: flex;
  width: 24px;
  height: 24px;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  color: #A9ABAD;
}

.notification-dialog.android-style .notification-header .close-button:hover, .notification-dialog.android-style .notification-header .close-button:active {
  color: #958d9e;
}

.notification-dialog.android-style .notification-content {
  font-size: 13px;
  line-height: 1.4em;
  margin-top: 14px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.notification-dialog.android-style .notification-content .subtitle {
  font-size: 15px;
  margin: 0 0 5px 0;
  line-height: 1.4em;
  font-weight: 500;
}

.notification-dialog.android-style .notification-content .in {
  padding-right: 16px;
}

.notification-dialog.android-style .icon-box {
  width: 46px;
  height: 46px;
  font-size: 46px;
  color: #A9ABAD;
}

.notification-dialog.android-style .notification-footer {
  border-top: 1px solid #DCDCE9;
  margin: 16px -16px -24px -16px;
  padding: 0;
  display: flex;
  align-items: flex-start;
}

.notification-dialog.android-style .notification-footer .notification-button {
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  color: #6236FF !important;
  font-size: 13px;
  border-right: 1px solid #DCDCE9;
  padding: 16px 6px;
}

.notification-dialog.android-style .notification-footer .notification-button ion-icon {
  font-size: 20px;
  line-height: 1em;
  margin-right: 8px;
}

.notification-dialog.android-style .notification-footer .notification-button:last-child {
  border-right: 0;
}

.notification-dialog.android-style .notification-footer .notification-button:hover, .notification-dialog.android-style .notification-footer .notification-button:active {
  color: #4e1dff;
  background: rgba(220, 220, 233, 0.3);
}

.notification-dialog.ios-style {
  margin: 10px;
  background: #3b4859;
  padding: 0;
  border-radius: 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.08);
}

.notification-dialog.ios-style .notification-header {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px;
  background: rgba(0, 0, 0, 0.1);
  border-radius: 10px 10px 0 0;
}

.notification-dialog.ios-style .notification-header .in {
  display: flex;
  align-items: center;
}

.notification-dialog.ios-style .notification-header .in .imaged {
  margin-right: 8px;
}

.notification-dialog.ios-style .notification-header .in strong {
  font-size: 13px;
  font-weight: 400;
  color: #fff;
}

.notification-dialog.ios-style .notification-header .right {
  display: flex;
  align-items: center;
}

.notification-dialog.ios-style .notification-header .right span {
  display: inline-flex;
  align-items: center;
  margin-right: 6px;
  color: rgba(255, 255, 255, 0.5);
  font-size: 11px;
}

.notification-dialog.ios-style .notification-header .close-button {
  display: flex;
  width: 24px;
  height: 24px;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  color: #fff;
  opacity: 0.5;
}

.notification-dialog.ios-style .notification-header .close-button:hover, .notification-dialog.ios-style .notification-header .close-button:active {
  opacity: 0.7;
}

.notification-dialog.ios-style .icon-box {
  width: 46px;
  height: 46px;
  font-size: 46px;
  color: #A9ABAD;
}

.notification-dialog.ios-style .notification-content {
  font-size: 13px;
  line-height: 1.4em;
  padding: 14px 16px 20px 16px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  color: rgba(255, 255, 255, 0.75);
}

.notification-dialog.ios-style .notification-content .subtitle {
  font-size: 15px;
  margin: 0 0 5px 0;
  line-height: 1.4em;
  color: #fff;
  font-weight: 500;
}

.notification-dialog.ios-style .notification-content .in {
  padding-right: 16px;
}

.notification-dialog.ios-style .notification-footer {
  border-top: 1px solid rgba(255, 255, 255, 0.1);
  margin: 0px -16px -16px -16px;
  padding: 0;
  display: flex;
  align-items: flex-start;
}

.notification-dialog.ios-style .notification-footer .notification-button {
  color: #fff !important;
  flex: 1;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 13px;
  border-right: 1px solid rgba(255, 255, 255, 0.1);
  padding: 15px 6px;
}

.notification-dialog.ios-style .notification-footer .notification-button ion-icon {
  font-size: 20px;
  line-height: 1em;
  margin-right: 10px;
  color: #fff;
}

.notification-dialog.ios-style .notification-footer .notification-button:last-child {
  border-right: 0;
}

.notification-dialog.ios-style .notification-footer .notification-button:hover, .notification-dialog.ios-style .notification-footer .notification-button:active {
  color: #4e1dff;
  background: rgba(255, 255, 255, 0.02);
}

.ios-add-to-home .modal-header {
  border-bottom-color: transparent !important;
}

.ios-add-to-home .modal-content {
  position: relative;
  margin-bottom: 10px;
  z-index: 1;
  box-shadow: 0 10px 20px -4px rgba(0, 0, 0, 0.2) !important;
}

.ios-add-to-home .modal-content:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-left: 14px solid transparent;
  border-right: 14px solid transparent;
  border-top: 10px solid #fff;
  position: absolute;
  bottom: -7px;
  z-index: 10;
  left: 50%;
  margin-left: -16px;
}

.ios-add-to-home .modal-content .action-sheet-content {
  font-size: 13px;
  color: #27173E;
  line-height: 1.5em;
}

.ios-add-to-home .modal-content .action-sheet-content h4 {
  font-size: 15px;
  margin-bottom: 10px;
}

.ios-add-to-home .modal-content .action-sheet-content i.bi,
.ios-add-to-home .modal-content .action-sheet-content i.icon,
.ios-add-to-home .modal-content .action-sheet-content ion-icon {
  font-size: 22px;
  margin-bottom: -4px;
}

.android-add-to-home {
  z-index: 200000;
}

.android-add-to-home .modal-header {
  border-bottom-color: transparent !important;
}

.android-add-to-home .modal-dialog {
  margin-top: env(safe-area-inset-top) !important;
  top: 0;
  bottom: auto;
  padding: 6px !important;
  transform: translate(0, -100%) !important;
  transition: .5s all !important;
}

.android-add-to-home.show .modal-dialog {
  transform: translate(0, 0) !important;
  top: 10px;
}

.android-add-to-home .modal-content {
  position: relative;
  z-index: 1;
  border-radius: 8px !important;
  box-shadow: 0 10px 20px -4px rgba(0, 0, 0, 0.2) !important;
}

.android-add-to-home .modal-content:before {
  content: "";
  display: block;
  width: 0;
  height: 0;
  border-left: 10px solid transparent;
  border-right: 10px solid transparent;
  border-top: 10px solid #fff;
  position: absolute;
  top: -8px;
  z-index: 10;
  right: 8px;
  transform: rotate(180deg);
  margin-left: -16px;
}

.android-add-to-home .modal-content .action-sheet-content {
  font-size: 13px;
  color: #27173E;
  line-height: 1.6em;
  padding-top: 16px !important;
}

.android-add-to-home .modal-content .action-sheet-content i.bi,
.android-add-to-home .modal-content .action-sheet-content i.icon,
.android-add-to-home .modal-content .action-sheet-content ion-icon {
  font-size: 18px;
  margin-bottom: -5px;
}

.section-heading {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 16px;
}

.section-heading.padding {
  padding-left: 16px;
  padding-right: 16px;
}

.section-heading .title {
  margin: 0;
  font-size: 20px;
  letter-spacing: -0.01em;
  line-height: 1em;
  padding-right: 16px;
}

.section-heading .link {
  color: rgba(98, 54, 255, 0.5);
  font-size: 13px;
  font-weight: 500;
}

.wallet-card-section {
  position: relative;
}

.wallet-card-section:before {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  content: "";
  display: block;
  height: 140px;
  background: #6236FF;
}

.wallet-card {
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  border-radius: 10px;
  padding: 20px 24px;
  position: relative;
  z-index: 1;
}

.wallet-card .balance {
  display: flex;
  align-items: center;
  justify-content: space-between;
  margin-bottom: 10px;
  height: 100px;
}

.wallet-card .balance .left {
  padding-right: 10px;
}

.wallet-card .balance .right {
  padding: 0;
}

.wallet-card .balance .right .button {
  display: flex;
  align-items: center;
  justify-content: center;
  line-height: 1em;
  color: #6236FF;
  background: rgba(98, 54, 255, 0.1);
  width: 50px;
  height: 64px;
  font-size: 26px;
  border-radius: 10px;
}

.wallet-card .balance .right .button:hover {
  background: #6236FF !important;
  color: #fff !important;
}

.wallet-card .balance .title {
  color: #27173E;
  font-weight: 500;
  display: block;
  margin-bottom: 8px;
}

.wallet-card .balance .total {
  font-weight: 700;
  letter-spacing: -0.01em;
  line-height: 1em;
  font-size: 32px;
}

.wallet-card .wallet-footer {
  border-top: 1px solid #DCDCE9;
  padding-top: 20px;
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
}

.wallet-card .wallet-footer .item {
  flex: 1;
  text-align: center;
}

.wallet-card .wallet-footer .item a {
  display: block;
}

.wallet-card .wallet-footer .item a:active {
  transform: scale(0.94);
}

.wallet-card .wallet-footer .item .icon-wrapper {
  background: #6236FF;
  width: 48px;
  height: 48px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  border-radius: 10px;
  color: #fff;
  font-size: 24px;
  margin-bottom: 14px;
}

.wallet-card .wallet-footer .item strong {
  display: block;
  color: #27173E;
  font-weight: 500;
  font-size: 11px;
  line-height: 1.2em;
}

.stat-box {
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  border-radius: 10px;
  padding: 20px 24px;
}

.stat-box .title {
  font-size: 13px;
  color: #958d9e;
  font-weight: 500;
  display: block;
  margin-bottom: 8px;
  line-height: 1.4em;
}

.stat-box .value {
  font-size: 24px;
  font-weight: 700;
  letter-spacing: -0.02em;
  line-height: 1em;
  color: #27173E;
}

.transactions .item {
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  border-radius: 10px;
  padding: 20px 24px;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.transactions .item:last-child {
  margin-bottom: 0;
}

.transactions .item p {
  font-size: 11px;
  margin: 0;
  color: #958d9e;
  font-weight: 500;
}

.transactions .item .detail {
  display: flex;
  align-items: center;
  justify-content: flex-start;
  line-height: 1.2em;
}

.transactions .item .detail .image-block {
  margin-right: 16px;
}

.transactions .item .detail strong {
  display: block;
  font-weight: 500;
  color: #27173E;
  margin-bottom: 3px;
}

.transactions .item .right {
  padding-left: 10px;
}

.transactions .item .right .price {
  font-weight: 700;
  color: #27173E;
  letter-spacing: -0.03em;
}

.shadowfix .owl-stage {
  padding-bottom: 0px;
}

.bill-box {
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  border-radius: 10px;
  padding: 20px 24px;
  text-align: center;
}

.bill-box .img-wrapper {
  text-align: center;
  margin-bottom: 16px;
}

.bill-box .img-wrapper img {
  margin: auto;
}

.bill-box .img-wrapper .iconbox {
  width: 48px;
  height: 48px;
  background: #6236FF;
  border-radius: 10px;
  line-height: 1em;
  color: #fff;
  font-size: 24px;
  display: inline-flex;
  align-items: center;
  justify-content: center;
}

.bill-box .price {
  font-size: 20px;
  font-weight: 700;
  color: #27173E;
  letter-spacing: -0.02em;
  line-height: 1em;
  margin-bottom: 12px;
}

.bill-box p {
  font-size: 11px;
  line-height: 1.4em;
  height: 36px;
  margin: 0 0 10px 0;
}

.goals .item {
  padding: 20px 24px;
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  border-radius: 10px;
  margin-bottom: 10px;
}

.goals .item:last-child {
  margin-bottom: 0;
}

.goals .item .in {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  margin-bottom: 6px;
}

.goals .item h4 {
  margin: 0;
  font-size: 15px;
  font-weight: 500;
}

.goals .item p {
  margin: 0;
  font-size: 11px;
}

.goals .item .price {
  font-weight: 700;
  color: #27173E;
}

.user-card {
  background: #ffffff;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  display: block;
  padding: 10px;
  text-align: center;
  border-radius: 10px;
}

.user-card strong {
  display: block;
  font-size: 11px;
  color: #27173E;
  line-height: 1.3em;
  margin-top: 8px;
}

.blog-card {
  padding: 0;
  background: #ffffff;
  border-radius: 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
}

.blog-card img {
  border-radius: 10px 10px 0 0;
}

.blog-card .text {
  padding: 12px 16px;
}

.blog-card .title {
  margin: 0;
  font-size: 15px;
  font-weight: 500;
  line-height: 1.4em;
  height: 67px;
  overflow: hidden;
}

.blog-card small {
  font-size: 11px;
  color: #A9ABAD;
  margin: 0;
  line-height: 1.2em;
}

.listed-detail .icon-wrapper {
  text-align: center;
}

.listed-detail .iconbox {
  width: 64px;
  height: 64px;
  border-radius: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  background: #6236FF;
  font-size: 26px;
  color: #FFF;
}

.splash-page {
  text-align: center;
}

.splash-page .iconbox {
  width: 72px;
  height: 72px;
  background: #6236FF;
  border-radius: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 32px;
  color: #FFF;
  margin: auto;
}

.fixed-bar {
  position: fixed;
  bottom: 0;
  left: 0;
  right: 0;
  padding: 0 16px;
  background: #FFF;
  min-height: 84px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding-bottom: env(safe-area-inset-bottom);
}

.fixed-bar > div {
  flex: 1;
}

.blog-header-info {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 0 0;
  font-size: 13px;
}

.blog-header-info img {
  padding: 0;
  margin: 0;
}

.avatar-section {
  text-align: center;
  position: relative;
  display: inline-flex;
}

.avatar-section .imaged {
  border: 5px solid #FFF;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
}

.avatar-section .button {
  background: #6236FF;
  color: #FFF;
  width: 32px;
  height: 32px;
  border-radius: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  font-size: 20px;
  position: absolute;
  right: 0;
  bottom: 0;
}

.card-block {
  height: 220px;
  background: #6236FF;
  border-radius: 10px;
  box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.09);
  color: #FFF;
  position: relative;
}

.card-block .card-main {
  background-image: linear-gradient(-180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.23) 100%);
  position: absolute;
  border-radius: 10px;
  left: 0;
  right: 0;
  bottom: 0;
  top: 0;
  display: flex;
  align-items: flex-end;
  padding: 20px 24px;
}

.card-block .card-button {
  position: absolute;
  right: 10px;
  top: 10px;
}

.card-block .card-button > .btn {
  background: transparent !important;
  color: #FFF !important;
}

.card-block span.label {
  font-size: 11px;
  letter-spacing: 1px;
  opacity: .5;
  line-height: 1em;
  margin-bottom: 5px;
  text-transform: uppercase;
  display: block;
  font-weight: 500;
}

.card-block .in .card-number {
  font-size: 17px;
  letter-spacing: 3px;
  font-weight: 500;
}

.card-block .in .card-expiry {
  font-size: 14px;
  font-weight: 500;
  margin-right: 20px;
}

.card-block .in .card-ccv {
  font-weight: 500;
  font-size: 14px;
}

.card-block .bottom {
  display: flex;
  align-items: center;
  margin-top: 20px;
}

.card-block .balance {
  position: absolute;
  left: 24px;
  top: 24px;
}

.card-block .balance .title {
  font-weight: 700;
  color: #FFF;
  margin-top: 7px;
  font-size: 24px;
}

.transfer-verification {
  padding: 0 10px;
}

.transfer-verification .from-to-block {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  position: relative;
}

.transfer-verification .from-to-block .item {
  position: relative;
  z-index: 2;
}

.transfer-verification .from-to-block .item strong {
  line-height: 1.3em;
  margin-top: 8px;
  display: block;
  color: #958d9e;
  font-weight: 500;
  font-size: 11px;
}

.transfer-verification .from-to-block .arrow {
  position: absolute;
  left: 72px;
  right: 72px;
  top: 24px;
  z-index: 1;
  background: #DCDCE9;
  height: 2px;
}

.transfer-verification .from-to-block .arrow:after {
  content: '';
  border: solid #DCDCE9;
  border-width: 0 2px 2px 0;
  display: inline-block;
  padding: 6px;
  transform: rotate(-45deg);
  -webkit-transform: rotate(-45deg);
  position: absolute;
  top: -6px;
  right: 0;
}

.transfer-verification .transfer-amount {
  margin-bottom: -16px;
}

.transfer-verification .transfer-amount .caption {
  font-size: 11px;
  color: #27173E;
  line-height: 1.2em;
}

body.dark-mode {
  background: #030108;
  color: #8f82a5;
}

body.dark-mode.bg-white {
  background: #161129 !important;
}

body.dark-mode h1,
body.dark-mode h2,
body.dark-mode h3,
body.dark-mode h4,
body.dark-mode h5,
body.dark-mode h6 {
  color: #fff;
}

body.dark-mode h1 small,
body.dark-mode h2 small,
body.dark-mode h3 small,
body.dark-mode h4 small,
body.dark-mode h5 small,
body.dark-mode h6 small {
  color: rgba(255, 255, 255, 0.6);
}

body.dark-mode .text-muted {
  color: #8f82a5 !important;
}

body.dark-mode .lead {
  color: #8f82a5;
}

body.dark-mode blockquote.blockquote {
  background: rgba(45, 31, 59, 0.5);
  color: #fff;
}

body.dark-mode blockquote.blockquote .blockquote-footer {
  color: #8f82a5;
}

body.dark-mode .appHeader {
  background: #161129;
  color: #fff;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .appHeader:before {
  background: #161129;
}

body.dark-mode .appHeader.bg-light {
  color: #161129;
}

body.dark-mode .appHeader.transparent {
  background: transparent;
}

body.dark-mode .appHeader.transparent:before {
  background: #030108;
}

body.dark-mode .extraHeader {
  background: #161129;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .content-hero {
  background: #161129;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .wide-block {
  background: #161129;
  border-top-color: #2d1f3b;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .section-title {
  color: #fff;
}

body.dark-mode .content-header,
body.dark-mode .content-footer {
  color: #69587f;
}

body.dark-mode .appBottomMenu {
  background: #161129;
  border-top-color: #2d1f3b;
}

body.dark-mode .appBottomMenu .item .icon,
body.dark-mode .appBottomMenu .item ion-icon,
body.dark-mode .appBottomMenu .item strong {
  color: #fff;
}

body.dark-mode .appBottomMenu .item:hover .icon,
body.dark-mode .appBottomMenu .item:hover ion-icon,
body.dark-mode .appBottomMenu .item:hover strong {
  color: #fff;
}

body.dark-mode .appBottomMenu.bg-light {
  background: #fff !important;
}

body.dark-mode .appBottomMenu.bg-light .item .icon,
body.dark-mode .appBottomMenu.bg-light .item ion-icon,
body.dark-mode .appBottomMenu.bg-light .item strong {
  color: #27173E;
}

body.dark-mode .appFooter {
  border-top-color: #2d1f3b;
  background: #161129 !important;
}

body.dark-mode .appFooter .footer-title {
  color: #fff;
}

body.dark-mode .section-heading .link {
  color: rgba(149, 141, 158, 0.8) !important;
}

body.dark-mode #sidebarPanel .modal-dialog {
  background: #161129;
}

body.dark-mode #sidebarPanel .modal-dialog .modal-content {
  background: transparent !important;
}

body.dark-mode #sidebarPanel .modal-dialog .sidebar-close {
  color: #69587f !important;
}

body.dark-mode .sidebar-balance .listview-title {
  color: #fff;
}

body.dark-mode .profileBox .in strong {
  color: #fff;
}

body.dark-mode .profileBox .in .text-muted {
  color: #69587f !important;
}

body.dark-mode .listview-title {
  color: #8f82a5;
}

body.dark-mode .listview {
  color: #fff;
  background: #161129;
  border-top-color: #2d1f3b;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .listview .text-muted {
  color: #69587f !important;
}

body.dark-mode .listview .text-small {
  color: #8f82a5;
}

body.dark-mode .listview .text-xsmall {
  color: #69587f;
}

body.dark-mode .listview > li:after {
  background: #2d1f3b;
}

body.dark-mode .listview > li footer {
  color: #8f82a5;
}

body.dark-mode .listview > li.divider-title {
  background: rgba(45, 31, 59, 0.5);
  border-top-color: #2d1f3b;
  border-bottom-color: #2d1f3b;
  color: #8f82a5;
}

body.dark-mode .link-listview > li a {
  color: #fff !important;
}

body.dark-mode .link-listview > li a:after {
  color: #69587f;
}

body.dark-mode .link-listview > li a:active {
  background: rgba(45, 31, 59, 0.3);
}

body.dark-mode .link-listview > li.active a {
  background: rgba(45, 31, 59, 0.3) !important;
}

body.dark-mode .image-listview > li a.item {
  color: #fff !important;
}

body.dark-mode .image-listview > li a.item:active {
  background: rgba(45, 31, 59, 0.3);
}

body.dark-mode .image-listview > li a.item:after {
  color: #69587f;
}

body.dark-mode .image-listview > li.active .item {
  background: rgba(45, 31, 59, 0.3) !important;
}

body.dark-mode .image-listview.media > li {
  border-bottom-color: #2d1f3b;
}

body.dark-mode .accordion {
  border-top-color: #2d1f3b;
  border-bottom-color: #2d1f3b;
  background: #161129;
}

body.dark-mode .accordion .accordion-body {
  background: #161129;
}

body.dark-mode .accordion .accordion-header .btn,
body.dark-mode .accordion .accordion-header .accordion-button {
  background: #161129 !important;
  color: #fff;
}

body.dark-mode .accordion .accordion-header .btn:active,
body.dark-mode .accordion .accordion-header .accordion-button:active {
  background: #161129 !important;
}

body.dark-mode .accordion .accordion-header .btn:after,
body.dark-mode .accordion .accordion-header .accordion-button:after {
  background: url("data:image/svg+xml,%0A%3Csvg width='10px' height='16px' viewBox='0 0 10 16' version='1.1' xmlns='http://www.w3.org/2000/svg' xmlns:xlink='http://www.w3.org/1999/xlink'%3E%3Cg id='Page-1' stroke='none' stroke-width='1' fill='none' fill-rule='evenodd' stroke-linecap='round' stroke-linejoin='round'%3E%3Cg id='Listview' transform='translate(-112.000000, -120.000000)' stroke='%23FFF' stroke-width='2.178'%3E%3Cpolyline id='Path' points='114 122 120 128 114 134'%3E%3C/polyline%3E%3C/g%3E%3C/g%3E%3C/svg%3E") no-repeat center center !important;
  color: #69587f;
}

body.dark-mode .accordion .accordion-header .btn.collapsed:before,
body.dark-mode .accordion .accordion-header .accordion-button.collapsed:before {
  background: #2d1f3b;
}

body.dark-mode .accordion .accordion-header.bg-primary .accordion-button {
  background: #6236FF !important;
}

body.dark-mode .accordion .accordion-header.bg-secondary .accordion-button {
  background: #8494A8 !important;
}

body.dark-mode .accordion .accordion-header.bg-success .accordion-button {
  background: #1DCC70 !important;
}

body.dark-mode .accordion .accordion-header.bg-warning .accordion-button {
  background: #FFB400 !important;
}

body.dark-mode .accordion .accordion-header.bg-danger .accordion-button {
  background: #FF396F !important;
}

body.dark-mode .accordion .accordion-header.bg-info .accordion-button {
  background: #05D0A4 !important;
}

body.dark-mode .accordion .accordion-header.bg-dark .accordion-button {
  background: #222 !important;
}

body.dark-mode .inset .accordion {
  border-color: #2d1f3b;
}

body.dark-mode .modal .modal-content {
  background: #161129;
}

body.dark-mode .modalbox .modal-dialog .modal-content .modal-header {
  border-bottom-color: #2d1f3b;
  background: #161129;
}

body.dark-mode .modalbox .modal-dialog .modal-content .modal-header .modal-title {
  color: #fff;
}

body.dark-mode .panelbox .modal-dialog .modal-content .modal-header .modal-title {
  color: #fff;
}

body.dark-mode .modal.action-sheet .modal-content .modal-header {
  border-bottom-color: #2d1f3b;
}

body.dark-mode .modal.action-sheet .modal-content .modal-header .modal-title {
  color: #fff;
}

body.dark-mode .action-button-list > li .btn {
  color: #fff;
}

body.dark-mode .action-button-list > li .btn:active, body.dark-mode .action-button-list > li .btn.active {
  background: rgba(45, 31, 59, 0.3);
}

body.dark-mode .action-button-list > li .btn.text-dark {
  color: #fff !important;
}

body.dark-mode .action-button-list > li.action-divider {
  background: #2d1f3b;
}

body.dark-mode .card {
  background: #161129;
}

body.dark-mode .card .card-subtitle,
body.dark-mode .card .card-title {
  color: #fff;
}

body.dark-mode .card .listview {
  border-radius: 10px;
}

body.dark-mode .card .card-header {
  color: #fff;
  border-bottom-color: #2d1f3b;
}

body.dark-mode .card .card-footer {
  border-top-color: #2d1f3b;
  color: #8f82a5;
}

body.dark-mode .card.bg-primary .card-header, body.dark-mode .card.bg-secondary .card-header, body.dark-mode .card.bg-danger .card-header, body.dark-mode .card.bg-success .card-header, body.dark-mode .card.bg-warning .card-header, body.dark-mode .card.bg-info .card-header, body.dark-mode .card.bg-dark .card-header {
  border-bottom: 1px solid rgba(255, 255, 255, 0.15);
}

body.dark-mode .card.bg-light {
  background: #fff !important;
  color: #958d9e;
}

body.dark-mode .card.bg-light .card-header {
  border-bottom-color: #DCDCE9;
  color: #27173E;
}

body.dark-mode .card.bg-light .card-title {
  color: #27173E;
}

body.dark-mode .form-check .form-check-label {
  color: #fff;
}

body.dark-mode .form-check .form-check-label:after {
  border-color: #3f2b52;
}

body.dark-mode .input-list .form-check:after {
  background: #2d1f3b;
}

body.dark-mode .input-list .form-check .form-check-label:active {
  background: rgba(45, 31, 59, 0.3);
}

body.dark-mode .form-switch .form-check-label:after {
  background: #2d1f3b;
}

body.dark-mode .form-switch .form-check-label:before {
  background: #ffffff;
}

body.dark-mode .form-switch .form-check-input:checked ~ .form-check-label:after {
  background: #6236FF !important;
}

body.dark-mode .chip {
  background: #372648;
  color: #fff;
}

body.dark-mode .chip.chip-outline {
  box-shadow: inset 0 0 0 1px #372648;
}

body.dark-mode .chip .chip-icon {
  background: #8f82a5;
}

body.dark-mode .chip .chip-delete {
  color: #fff;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .btn-list .btn {
  border-bottom-color: #2d1f3b !important;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .btn-list .btn:hover, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-list .btn:focus, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-list .btn:active, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-list .btn.active {
  background: rgba(45, 31, 59, 0.3) !important;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .btn-inline .btn {
  color: #8f82a5;
  border-right-color: #2d1f3b !important;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .btn-inline .btn:hover, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-inline .btn:focus, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-inline .btn:active, body.dark-mode .dialogbox .modal-dialog .modal-content .btn-inline .btn.active {
  background: rgba(45, 31, 59, 0.3) !important;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .modal-header .modal-title {
  color: #fff;
}

body.dark-mode .dialogbox .modal-dialog .modal-content .modal-footer {
  border-top-color: #2d1f3b;
}

body.dark-mode .dropdown .dropdown-menu,
body.dark-mode .dropup .dropdown-menu {
  background: #161129;
  border-color: #2d1f3b;
}

body.dark-mode .dropdown .dropdown-menu .dropdown-item,
body.dark-mode .dropup .dropdown-menu .dropdown-item {
  color: #fff;
}

body.dark-mode .dropdown .dropdown-menu .dropdown-item:hover, body.dark-mode .dropdown .dropdown-menu .dropdown-item:active,
body.dark-mode .dropup .dropdown-menu .dropdown-item:hover,
body.dark-mode .dropup .dropdown-menu .dropdown-item:active {
  background: rgba(45, 31, 59, 0.5);
  color: #fff;
}

body.dark-mode .dropdown .dropdown-menu .dropdown-item .dropdown-divider,
body.dark-mode .dropup .dropdown-menu .dropdown-item .dropdown-divider {
  border-top-color: #2d1f3b;
}

body.dark-mode .dropdown .dropdown-menu .dropdown-header,
body.dark-mode .dropup .dropdown-menu .dropdown-header {
  color: #8f82a5;
}

body.dark-mode .dropdown .dropdown-menu .text,
body.dark-mode .dropup .dropdown-menu .text {
  color: #8f82a5;
}

body.dark-mode .dropdown .dropdown-menu .icon,
body.dark-mode .dropdown .dropdown-menu ion-icon,
body.dark-mode .dropup .dropdown-menu .icon,
body.dark-mode .dropup .dropdown-menu ion-icon {
  color: #fff;
}

body.dark-mode .exampleBox {
  border-color: #2d1f3b;
  background: rgba(45, 31, 59, 0.2);
}

body.dark-mode .iconExample {
  color: #fff;
}

body.dark-mode .form-group .label {
  color: #fff;
}

body.dark-mode .form-group .input-info {
  color: #69587f;
}

body.dark-mode .form-group .clear-input {
  color: #8f82a5;
}

body.dark-mode .form-group.basic .form-control,
body.dark-mode .form-group.basic .custom-select {
  border-bottom-color: #372648;
  color: #fff;
}

body.dark-mode .verification-input {
  border-color: #372648 !important;
  color: #fff !important;
  background: #161129 !important;
}

body.dark-mode .verification-input:focus {
  border-color: #6236FF !important;
}

body.dark-mode .input-group .input-group-text {
  border-bottom-color: #372648;
  color: #fff;
}

body.dark-mode .custom-file-upload label {
  background-color: rgba(45, 31, 59, 0.2);
  border-color: #372648;
  margin: 0;
}

body.dark-mode .custom-file-upload label span {
  color: #69587f;
}

body.dark-mode .custom-file-upload label span .icon,
body.dark-mode .custom-file-upload label span ion-icon {
  color: #69587f;
}

body.dark-mode .custom-file-upload label.file-uploaded span {
  color: #8f82a5;
  background-color: #2d1f3b;
}

body.dark-mode .form-group.boxed .form-control {
  color: #fff;
  border-color: #372648;
  background: #141025;
}

body.dark-mode .form-group.boxed .form-control:focus {
  border-color: #6236FF;
}

body.dark-mode .message-divider {
  color: #69587f;
}

body.dark-mode .message-item .bubble {
  background: #2d1f3b;
  color: #fff;
}

body.dark-mode .message-item .title {
  color: #8f82a5;
}

body.dark-mode .message-item .footer {
  color: #fff;
}

body.dark-mode .chatFooter {
  background: #030108;
  border-top-color: #2d1f3b;
}

body.dark-mode .notification-dialog.android-style {
  background: #18122d;
}

body.dark-mode .notification-dialog.android-style .notification-header .in strong {
  color: #fff;
}

body.dark-mode .notification-dialog.android-style .notification-header .close-button {
  color: #69587f;
}

body.dark-mode .notification-dialog.android-style .notification-header .close-button:hover, body.dark-mode .notification-dialog.android-style .notification-header .close-button:active {
  color: #8f82a5;
}

body.dark-mode .notification-dialog.android-style .icon-box {
  color: #69587f;
}

body.dark-mode .notification-dialog.android-style .notification-footer {
  border-top: 1px solid #2d1f3b;
}

body.dark-mode .notification-dialog.android-style .notification-footer .notification-button {
  border-right: 1px solid #2d1f3b;
}

body.dark-mode .notification-dialog.android-style .notification-footer .notification-button:hover, body.dark-mode .notification-dialog.android-style .notification-footer .notification-button:active {
  background: rgba(45, 31, 59, 0.3);
}

body.dark-mode .notification-dialog.ios-style {
  background: #20183b;
}

body.dark-mode .notification-dialog.ios-style .icon-box {
  color: #69587f;
}

body.dark-mode .progress {
  background: #372648;
}

body.dark-mode .searchbox input {
  color: #8f82a5;
}

body.dark-mode .searchbox .form-control {
  background: #2d1f3b;
  border-color: #2d1f3b !important;
}

body.dark-mode .searchbox .form-control:focus {
  border-color: #070509;
  color: #fff;
}

body.dark-mode .searchbox .form-control:focus ~ .input-icon {
  color: #fff;
}

body.dark-mode .searchbox .close {
  color: #69587f;
}

body.dark-mode .searchbox .input-icon {
  color: #69587f;
}

body.dark-mode .table {
  color: #8f82a5;
}

body.dark-mode .table tr {
  border-color: #2d1f3b;
}

body.dark-mode .table thead th {
  color: #fff;
}

body.dark-mode .table td,
body.dark-mode .table th {
  border-top: 1px solid #2d1f3b;
}

body.dark-mode .table-striped > tbody > tr:nth-of-type(odd) {
  background: rgba(45, 31, 59, 0.1);
  color: #8f82a5;
}

body.dark-mode .table-bordered td,
body.dark-mode .table-bordered th {
  border-color: #2d1f3b;
}

body.dark-mode .table.bg-primary tbody td,
body.dark-mode .table.bg-primary tbody th,
body.dark-mode .table.bg-secondary tbody td,
body.dark-mode .table.bg-secondary tbody th,
body.dark-mode .table.bg-success tbody td,
body.dark-mode .table.bg-success tbody th,
body.dark-mode .table.bg-danger tbody td,
body.dark-mode .table.bg-danger tbody th,
body.dark-mode .table.bg-warning tbody td,
body.dark-mode .table.bg-warning tbody th,
body.dark-mode .table.bg-info tbody td,
body.dark-mode .table.bg-info tbody th {
  border-top-color: rgba(255, 255, 255, 0.2);
}

body.dark-mode .table.bg-primary tr,
body.dark-mode .table.bg-primary td,
body.dark-mode .table.bg-primary th,
body.dark-mode .table.bg-secondary tr,
body.dark-mode .table.bg-secondary td,
body.dark-mode .table.bg-secondary th,
body.dark-mode .table.bg-success tr,
body.dark-mode .table.bg-success td,
body.dark-mode .table.bg-success th,
body.dark-mode .table.bg-danger tr,
body.dark-mode .table.bg-danger td,
body.dark-mode .table.bg-danger th,
body.dark-mode .table.bg-warning tr,
body.dark-mode .table.bg-warning td,
body.dark-mode .table.bg-warning th,
body.dark-mode .table.bg-info tr,
body.dark-mode .table.bg-info td,
body.dark-mode .table.bg-info th {
  border-bottom-color: rgba(255, 255, 255, 0.2);
}

body.dark-mode .table.bg-primary tbody tr:last-child td,
body.dark-mode .table.bg-primary tbody tr:last-child th,
body.dark-mode .table.bg-secondary tbody tr:last-child td,
body.dark-mode .table.bg-secondary tbody tr:last-child th,
body.dark-mode .table.bg-success tbody tr:last-child td,
body.dark-mode .table.bg-success tbody tr:last-child th,
body.dark-mode .table.bg-danger tbody tr:last-child td,
body.dark-mode .table.bg-danger tbody tr:last-child th,
body.dark-mode .table.bg-warning tbody tr:last-child td,
body.dark-mode .table.bg-warning tbody tr:last-child th,
body.dark-mode .table.bg-info tbody tr:last-child td,
body.dark-mode .table.bg-info tbody tr:last-child th {
  border-bottom-color: transparent !important;
}

body.dark-mode .nav-tabs.style1 {
  background: rgba(45, 31, 59, 0.4);
}

body.dark-mode .nav-tabs.style1 .nav-item .nav-link {
  color: #8f82a5;
}

body.dark-mode .nav-tabs.style1 .nav-item .nav-link.active {
  color: #fff;
  background: #3a284c;
  box-shadow: 0 2px 4px 0 rgba(0, 0, 0, 0.22), 0 2px 1px 0 rgba(0, 0, 0, 0.04);
}

body.dark-mode .nav-tabs.lined .nav-item .nav-link {
  color: #8f82a5;
}

body.dark-mode .nav-tabs.lined .nav-item .nav-link.active {
  color: #6236FF;
}

body.dark-mode .timeline:before {
  background: #2d1f3b;
}

body.dark-mode .timeline .dot {
  background: #69587f;
}

body.dark-mode .wallet-card {
  background: #161129;
  z-index: 1;
}

body.dark-mode .wallet-card .balance .right .button {
  color: rgba(255, 255, 255, 0.7);
  background: rgba(98, 54, 255, 0.15);
}

body.dark-mode .wallet-card .balance .title {
  color: #fff;
}

body.dark-mode .wallet-card .wallet-footer {
  border-top-color: #2d1f3b;
}

body.dark-mode .wallet-card .wallet-footer .item strong {
  color: #fff;
}

body.dark-mode .stat-box {
  background: #161129;
}

body.dark-mode .stat-box .title {
  color: #8f82a5;
}

body.dark-mode .stat-box .value {
  color: #fff;
}

body.dark-mode .transactions .item {
  background: #161129;
}

body.dark-mode .transactions .item p {
  color: #8f82a5;
}

body.dark-mode .transactions .item .detail strong {
  color: #fff;
}

body.dark-mode .transactions .item .right .price {
  color: #fff;
}

body.dark-mode .bill-box {
  background: #161129;
}

body.dark-mode .bill-box .price {
  color: #fff;
}

body.dark-mode .goals .item {
  background: #161129;
}

body.dark-mode .goals .item .price {
  color: #fff;
}

body.dark-mode .user-card {
  background: #161129;
}

body.dark-mode .user-card strong {
  color: #fff;
}

body.dark-mode .blog-card {
  background: #161129;
}

body.dark-mode .blog-card small {
  color: #69587f;
}

body.dark-mode .fixed-bar {
  background: #161129;
}

body.dark-mode .transfer-verification .from-to-block .item strong {
  color: #8f82a5;
}

body.dark-mode .transfer-verification .from-to-block .arrow {
  background: #2d1f3b;
}

body.dark-mode .transfer-verification .from-to-block .arrow:after {
  border-color: #2d1f3b;
}

body.dark-mode .transfer-verification .transfer-amount .caption {
  color: #fff;
}

body.dark-mode .ios-add-to-home .modal-content:before {
  border-top-color: #161129;
}

body.dark-mode .ios-add-to-home .modal-content .action-sheet-content {
  color: #fff;
}

body.dark-mode .android-add-to-home .modal-content:before {
  border-top-color: #161129;
}

body.dark-mode .android-add-to-home .modal-content .action-sheet-content {
  color: #fff;
}
