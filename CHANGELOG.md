# Changelog

## 0.8.0
Found 8 pull request(s) merged for pennyphp/penny between 0.7.0 and 0.8.0.

* [[#145]](https://github.com/pennyphp/penny/pull/145) make bootstrap event triggered in App::run()
* [[#147]](https://github.com/pennyphp/penny/pull/147) Fixes [[#96]](https://github.com/pennyphp/penny/pull/96) , implements ClassName::class prefix for event name
* [[#150]](https://github.com/pennyphp/penny/pull/150) update symfony/http-foundation to ~3.0
* [[#151]](https://github.com/pennyphp/penny/pull/151) remove php7 from allow_failures in travis config
* [[#146]](https://github.com/pennyphp/penny/pull/146) remove ->getContainer() call inside internal App class inside setUpEventWithRequestResponse() method
* [[#152]](https://github.com/pennyphp/penny/pull/152) add exception message to RouteNoutFoundException and MethodNotAllowedException
* [[#154]](https://github.com/pennyphp/penny/pull/154) Add test dispatcher is a closure
* [[#155]](https://github.com/pennyphp/penny/pull/155) Fixed Readme.md and add site

## 0.7.0

Found 32 pull request(s) merged for pennyphp/penny between 0.6.0 and HEAD.

* [[#104]](https://github.com/pennyphp/penny/pull/104) set off email notification on .travis.yml
* [[#106]](https://github.com/pennyphp/penny/pull/106) remove __construct() from PennyEventInterface
* [[#107]](https://github.com/pennyphp/penny/pull/107) Update getting-started.md
* [[#108]](https://github.com/pennyphp/penny/pull/108) Use skeleton app and not classic app
* [[#110]](https://github.com/pennyphp/penny/pull/110) use "phpunit/phpunit": "^4.8|^5.0" in composer.json
* [[#111]](https://github.com/pennyphp/penny/pull/111) update package dependencies
* [[#114]](https://github.com/pennyphp/penny/pull/114) update docs regarding container and path role config
* [[#115]](https://github.com/pennyphp/penny/pull/115) remove dependency status badge
* [[#116]](https://github.com/pennyphp/penny/pull/116) Fixes penny-skeleton-app link
* [[#112]](https://github.com/pennyphp/penny/pull/112) Event Manager split interface
* [[#117]](https://github.com/pennyphp/penny/pull/117) Add EventManager docs
* [[#120]](https://github.com/pennyphp/penny/pull/120) added cakephp eventmanager proxy ( uses trigger->(PennyEventInterface $event) )
* [[#122]](https://github.com/pennyphp/penny/pull/122) Added missing $container property in Dispatcher class
* [[#123]](https://github.com/pennyphp/penny/pull/123) add missing properties in CakeEvent
* [[#124]](https://github.com/pennyphp/penny/pull/124) Fixes deprecated attach() method on Cake EventManager, use on() instead
* [[#125]](https://github.com/pennyphp/penny/pull/125) make scrutinizer score 10
* [[#128]](https://github.com/pennyphp/penny/pull/128) documentation improvements
* [[#127]](https://github.com/pennyphp/penny/pull/127) add php 7 to allow_failures in travis
* [[#126]](https://github.com/pennyphp/penny/pull/126) Fixes wrong namespace in PennyTest\Event
* [[#131]](https://github.com/pennyphp/penny/pull/131) Added missing docblock
* [[#130]](https://github.com/pennyphp/penny/pull/130) rename event adapters
* [[#129]](https://github.com/pennyphp/penny/pull/129) Move repetitive trigger with event to separate private method
* [[#132]](https://github.com/pennyphp/penny/pull/132) Fixes scrutinizer issues
* [[#133]](https://github.com/pennyphp/penny/pull/133) Fixes App::getEventManager() docblock
* [[#134]](https://github.com/pennyphp/penny/pull/134) usage of PennyEvmInterface for docblock instead
* [[#135]](https://github.com/pennyphp/penny/pull/135) refactor Dispatcher
* [[#136]](https://github.com/pennyphp/penny/pull/136) listener call priority in PennyEvmInterface
* [[#137]](https://github.com/pennyphp/penny/pull/137) more improvements
* [[#138]](https://github.com/pennyphp/penny/pull/138) Increase Scrutinizer anaytics
* [[#141]](https://github.com/pennyphp/penny/pull/141) Fixes RouteInfoInterface type hint in handleRoute() method
* [[#142]](https://github.com/pennyphp/penny/pull/142) Fix 139
* [[#143]](https://github.com/pennyphp/penny/pull/143) re-create 141

## 0.6.0

*  [[#84]](https://github.com/pennyphp/penny/pull/84) remove unused $request and $response property
*  [[#83]](https://github.com/pennyphp/penny/pull/83) container usage clean up
*  [[#86]](https://github.com/pennyphp/penny/pull/86) Fixes docblock: response is an incoming
*  [[#85]](https://github.com/pennyphp/penny/pull/85) increase scrutinizer score
*  [[#87]](https://github.com/pennyphp/penny/pull/87) add timeout config to .scrutinzer.yml
*  [[#90]](https://github.com/pennyphp/penny/pull/90) php-cs-fixer configuration
*  [[#88]](https://github.com/pennyphp/penny/pull/88) Build all from dependency injection
*  [[#93]](https://github.com/pennyphp/penny/pull/93) Feature/route info call user func approach
*  [[#91]](https://github.com/pennyphp/penny/pull/91) Standard dispatch result
*  [[#94]](https://github.com/pennyphp/penny/pull/94) add more tests
*  [[#95]](https://github.com/pennyphp/penny/pull/95) Drop static RouteInfo matched method
*  [[#98]](https://github.com/pennyphp/penny/pull/98) travis-ci performances improvement
*  [[#99]](https://github.com/pennyphp/penny/pull/99) added the "Exception" suffix
*  [[#100]](https://github.com/pennyphp/penny/pull/100) php 7 requirement definition
*  [[#103]](https://github.com/pennyphp/penny/pull/103) Add notification on #pennyphp irc
*  [[#102]](https://github.com/pennyphp/penny/pull/102) update ERROR_DISPATCH to dispath_error
*  [[#101]](https://github.com/pennyphp/penny/pull/101) Standard error event

## 0.5.0
* [[#82]](https://github.com/pennyphp/penny/pull/82) Remove gianarb prefix

## 0.4.1
* [[8a8ae85]](https://github.com/pennyphp/penny/commit/8a8ae856fa743cc8359a6f1c02d833cfe13cccff) Fixed for case insensitive file system

## 0.4.0
* [[#56]](https://github.com/pennyphp/penny/pull/56) change badge
* [[#54]](https://github.com/pennyphp/penny/pull/54) A more clean constructor
* [[#58]](https://github.com/pennyphp/penny/pull/58) Ignored .idea + typos
* [[#59]](https://github.com/pennyphp/penny/pull/59) Clean .gitignore
* [[#62]](https://github.com/pennyphp/penny/pull/62) typo errors
* [[#61]](https://github.com/pennyphp/penny/pull/61) Bullet points to perfect contributions
* [[#63]](https://github.com/pennyphp/penny/pull/63) Updated docblocks
* [[#65]](https://github.com/pennyphp/penny/pull/65) PHP-DI bootstrap configuration
* [[#69]](https://github.com/pennyphp/penny/pull/69) Added tests for #66
* [[#66]](https://github.com/pennyphp/penny/pull/66) Refactoring app construct
* [[#67]](https://github.com/pennyphp/penny/pull/67) Refactoring default request and response
* [[#70]](https://github.com/pennyphp/penny/pull/70) refactor ternary operator
* [[#71]](https://github.com/pennyphp/penny/pull/71) add tests -> penny is now 100% unit tested
* [[#76]](https://github.com/pennyphp/penny/pull/76) upgrade requirement to php 5.5, and zf version
* [[#78]](https://github.com/pennyphp/penny/pull/78) apply call_user_func_array to dispatcher invoke
* [[#73]](https://github.com/pennyphp/penny/pull/73) Dispatcher must be a callable
* [[#79]](https://github.com/pennyphp/penny/pull/79) Create container factory

## 0.3.0
* [[#40]](https://github.com/pennyphp/penny/pull/40) update composer description
* [[#39]](https://github.com/pennyphp/penny/pull/39) clean up
* [[#41]](https://github.com/pennyphp/penny/pull/41) PHP-CS-Fixer round
* [[#42]](https://github.com/pennyphp/penny/pull/42) Add test to describe the stop of application flow
* [[#45]](https://github.com/pennyphp/penny/pull/45) update docs in favor of installations
* [[#47]](https://github.com/pennyphp/penny/pull/47) Some review
* [[#22]](https://github.com/pennyphp/penny/pull/22) bootstrap test to run with symfony/http-foundation
* [[#49]](https://github.com/pennyphp/penny/pull/49) add tests for getContainer instanceOf interop ContainerInterface
* [[#50]](https://github.com/pennyphp/penny/pull/50) update composer.json's keywords
* [[#53]](https://github.com/pennyphp/penny/pull/53) Fixed #52 Replace http.flow with eventManager **BC_BREAK**

## 0.2.0
* [[#11]](https://github.com/pennyphp/penny/pull/11) Feature/docs
* [[#28]](https://github.com/pennyphp/penny/pull/28) OC + PHPDoc
* [[#35]](https://github.com/pennyphp/penny/pull/35) Try read the docs layout configuration
* [[#36]](https://github.com/pennyphp/penny/pull/36) Revert "Try read the docs layout configuration"
* [[#37]](https://github.com/pennyphp/penny/pull/37) Fixes typos

## 0.1.2
* [[#19]](https://github.com/pennyphp/penny/pull/19) Add support to php 5.4
* [[#20]](https://github.com/pennyphp/penny/pull/20) Remove unused code
* [[#23]](https://github.com/pennyphp/penny/pull/13) Clean sum array without foreach
* [[#24]](https://github.com/pennyphp/penny/pull/24) FQCN
* [[#26]](https://github.com/pennyphp/penny/pull/26) Removed useless white lines
* [[#27]](https://github.com/pennyphp/penny/pull/27) Added phpcs check on Travis-CI
* [[#29]](https://github.com/pennyphp/penny/pull/29) Fixes typo

## 0.1.1
* [[61a27f4]](https://github.com/pennyphp/penny/commit/61a27f4) Fixed wrong markdown syntax

## 0.1.0
* [[fabfffc]](https://github.com/pennyphp/penny/commit/fabfffc) Bootstrap project
* [[7e46405]](https://github.com/pennyphp/penny/commit/7e46405) Replace name in penny
* [[2fa13ab]](https://github.com/pennyphp/penny/commit/2fa13ab) Refactoring public API
* [[#2]](https://github.com/pennyphp/penny/pull/2) Corrected readme description
* [[#2]](https://github.com/pennyphp/penny/pull/3) Scrutinizer Auto-Fixes
* [[#8]](https://github.com/pennyphp/penny/pull/8) remove unused use statements
* [[#7]](https://github.com/pennyphp/penny/pull/7) Force or not exception throw
* [[#9]](https://github.com/pennyphp/penny/pull/9) Reduce number of event
* [[#20]](https://github.com/pennyphp/penny/pull/10) Create signature with route params
