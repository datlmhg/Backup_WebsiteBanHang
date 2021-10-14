=== Wordpress Bitcoin Payments - Blockonomics === 
Contributors: juhasiivikko, darrenwestwood, blockonomics
Tags: bitcoin, accept bitcoin, bitcoin woocommerce, bitcoin wordpress plugin, bitcoin payments 
Requires at least: 3.0.1 
Tested up to: 5.7
Stable tag: 3.5.1
License: MIT 
License URI: http://opensource.org/licenses/MIT 

Accept bitcoin payments and altcoins on your WooCommerce website. Bitcoin payments go directly to your wallet. 

== Description == 

The fastest and easiest way to start accepting Bitcoin payments on your WooCommerce online store. Since 2015, [Blockonomics](https://www.blockonomics.co/merchants?utm_source=wordpress) has helped thousands of ecommerce sites increase sales by including Bitcoin and Bitcoin Cash as payment options for their customers. 

= A truly decentralized bitcoin payment processor for WordPress = 

Blockonomics is the only Bitcoin payment gateway that enables full decentralization in the e-commerce industry. Purchases made to your website are instantly sent to your wallet, rather than to a payment gateway wallet. This not only saves you fees when taking your coins out, but it allows you to take ownership of your revenue without the need for a middle man. Never lose revenue from payment gateway wallet hacks - **be your own bank**! 


= Accept bitcoin payments, fast & easy = 
- Payments are received **directly into your wallet** 
- **No approvals** of API key/documentation required 
- **Safe and secure** transactions 
- Installation only takes **two minutes** - [Video Tutorial](https://www.youtube.com/watch?v=nFKzzMgdBpQ)  
- Eliminate chargebacks and fraud 
- **World-class** customer support team 

= Built for bitcoin merchants = 
- Accept Bitcoin (BTC) and Bitcoin Cash (BCH)
- **Segwit compatibility** enables the lowest transaction fees possible 
- All major HD wallets, such as Trezor, Ledger Nano S, Blockchain.info and Mycelium are supported 
- Supports **all major fiat currencies** 
- Complete checkout process happens within your website/theme
- **Privacy friendly** - Customer order information remains private to your shop and is never submitted to Blockonomics
- 1% Payment Fee, first 20 payments as free 
- Callbacks to TOR websites supported

== Installation == 

You can operate the plugin in two different modes:  

= Default Mode  =
- There is **no installation** procedure required. Blockonomics automatically starts working in this mode on activation of plugin 
- Bitcoin payments go to a Blockonomics temporary wallet   
- To withdraw received funds, user has to change to *Direct to Wallet* mode

= Direct to Wallet Mode (Recommended)  = 
[Video Tutorial](https://www.youtube.com/watch?v=lNFBAk2x6ns) | [Blog Tutorial](https://blog.blockonomics.co/how-to-accept-bitcoin-payments-on-woocommerce-using-blockonomics-f18661819a62)  
 
- Click on **Get Started For Free** on [Blockonomics > Merchants](https://www.blockonomics.co/merchants) and proceed to complete merchant wizard. 
- Your API key should be now shown on the [merchants page](https://www.blockonomics.co/merchants)   
- In WordPress Admin > Settings > Blockonomics, paste this API Key and Save Settings 
- Click on **Test Setup** button to verify installation  

For community support/discussion feel free [to post on our subreddit](https://www.reddit.com/r/blockonomics/)

== Frequently Asked Questions == 

= Getting error on checkout: Could not generate new bitcoin address, what to do? = 
Please use Settings > Blockonomics **Test Setup** to diagnose and get more
details about the issue

= Order is still on pending payment status even after two confirmations  = 
Your webhost is blocking incoming callbacks from bots, or you have a DDOS protection in place that is causing this. Blockonomics server does payment callbacks to update transaction status and cannot emulate a browser accessing your website. Please consult [this article](http://help.blockonomics.co/solution/articles/33000219539-order-status-not-changing-ddos-protection) on how debug and fix this

= How to report security issues? = 
Feel free to read our [bug bounty policy](https://help.blockonomics.co/support/solutions/articles/33000256692-bug-bounty-program). 
[![huntr](https://cdn.huntr.dev/huntr_security_badge_mono.svg)](https://huntr.dev)

= Can I remove Powered by Blockonomics text or customize the checkout page? = 
You are free to customize the checkout page according to your needs. Feel free to consult [this article](http://help.blockonomics.co/support/solutions/articles/33000243991-how-to-customize-the-checkout-page-)

== Screenshots == 

1. Animated Demo

2. Payment screen 

3. Settings Panel   

4. Blockonomics configuration
 
== Changelog ==

= 3.5.1  =
* Removed Powered by from checkout page. Other minor fixes

= 3.5  =
* Fixed duplicate addresses issue for high traffic websites 
* Fixed upgrade database bugs

= 3.4  =
* Updated UI for better Mobile View
* Fixed bugs in refresh page behaviour

= 3.3  =
* Minor Security fixes


= 3.2  =
* Updated Test Setup logic
* Security fixes

= 3.1  =
* New Test Setup Interface with Currencies Tab
* Added Woocommerce filter to locate orders by txid/address

= 3.0  =
* Using DB table to store orders

= 2.4.1  =
* Fixes update issues with merchant having large volumes

= 2.4  =
* Zero confirm RBF payment are unsafe and are ignored

= 2.3  =
* Added noJS payment screen support

= 2.2  =
* Fixed issues with callbacks

= 2.1  =
* Fixed txid not showing order details
* Fixed issue with caching files

= 2.0  =
* Added BCH support
* Fixed payment expiry issues
* New UI of payment page and code refactor

= 1.8.5  =
* Added option for noJavascript checkout page

= 1.8.3  =
* Better handling callbacks errors

= 1.8.2  =
* Removed conflicts with mailchimp plugin

= 1.8.1  =
* Improved altcoin help text in case payment is not detected
* Added support for adding custom checkout pages in theme

= 1.8.0  =
* Added Help text on Payment Page
* Supporting zero/one blockchain confirmations
* Reusing same address on order expiry

= 1.7.8  =
* Improvements to flypme refund flow
* Minor bug fixes

= 1.7.7  =
* Automatically detects rendering issues on checkout screen 

= 1.7.6  =
* Added Lite mode rendering option 

= 1.7.5  =
* Checkout page performance improvements and bug fixes

= 1.7.4  =
* Added Underpayment slack options, advanced settings section

= 1.7.2  =
* Fixed issue with Bitcoin Image not showing, code refactoring

= 1.7.1  =
* Patch fix for save settings not working for users without APIKey

= 1.7.0  =
* Installation now only requires plugin activate
* Altcoin Code refactored 

= 1.6.8  =
* Added refunds to altcoin payments

= 1.6.7  =
* Fixes for comptability to Wordpress 5.0
* TOR callbacks supported

= 1.6.6  =
* Updated comptability to Wordpress 5.0

= 1.6.5  =
* Adding payment details in order email, review messages 

= 1.6.4  =
* Removed grey background conflicting with some themes

= 1.6.3  =
* Fixed bug with enqueue script

= 1.6.2  =
* New option, extra currency rate margin

= 1.6.1  =
* Altcoin integration enabled
* New checkout design having btc/altcoin tab
* using wp_remote function to avoid fopen errors

= 1.6.0  =
* Test Upgrade

= 1.5.1  =
* Test Setup is more intelligent
* Fixed typos in README

= 1.5.0  =
* Better Test Setup Diagnostics
* Updated description/links to tutorials

= 1.4.9  =
* Faster and easier installation process having Test Setup feature
* Showing QR code for bech32 addresses 
* Showing Bitcoin Address for all orders

= 1.4.8  =
* Improved error handling when unable to generate address

= 1.4.7  =
* Made compatible for internationalization through translate.wordpress.org

= 1.4.6  =
* Updated README for more description on bitcoin payments

= 1.4.5  =
* Fixed problem with visual composer themes
* Added extra help text on order confirmation page
* Fixed conflict with javascript method
* Updated plugin to fix problem with incorrect commit

= 1.4.4  =
* Fixed problem with visual composer themes
* Added extra help text on order confirmation page
* Fixed conflict with javascript method

= 1.4.3  =
* Added option to configure timeperiod of checkout timer
* Added functionality to regenerate callback URL
* Updates to README and snapshots

= 1.4.2 =
* Fixed bug with conflicting style of spinner

= 1.4.1 =
* Moved all styles to CSS file. Gives ability to control plugin appearance
* Comptatibility with WP 4.9.1

= 1.4.0 =
* Usability improvements to payment screen
* Added Spanish, french and german translation

= 1.3.9 =
* Support for altcoin payments through shapeshift (You need to enable this from Settings)
* Not marking order as failed on overpayment 
* Minified JS files and removed unused ones

= 1.3.8 =
* Support for altcoin payments through shapeshift (You need to enable this from Settings)
* Not marking order as failed on overpayment 

= 1.3.7 =
* Added paid/expected BTC custom fields 
* Updated checkout icon 

= 1.3.6 =
* Improved payment screen user interface
* Comptability with WP 4.8 
* Updated README

= 1.3.5 =
* Improved payment screen user interface 
* Updated README

= 1.3.4 =
* Fixed github repo URL
* Updated README

= 1.3.2  =
* Change in README

= 1.3.1  =
* Minor change in README

= 1.3  =
* Showing errors when unable to generate new address
* Removed unused code

= 1.2 =
* Showing received order page after receiving payment
* fixes problems with multisite and php7 compatibility

