/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/App/Components/App.jsx":
/*!*********************************************!*\
  !*** ./resources/js/App/Components/App.jsx ***!
  \*********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

  "use strict";
  __webpack_require__.r(__webpack_exports__);
  /* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return App; });
  !(function webpackMissingModule() { var e = new Error("Cannot find module 'react'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
  /* harmony import */ var _Beer_jsx__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Beer.jsx */ "./resources/js/App/Components/Beer.jsx");
  /* harmony import */ var _Beer_jsx__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_Beer_jsx__WEBPACK_IMPORTED_MODULE_1__);
  function _typeof(obj) { "@babel/helpers - typeof"; if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") { _typeof = function _typeof(obj) { return typeof obj; }; } else { _typeof = function _typeof(obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; }; } return _typeof(obj); }
  
  function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }
  
  function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }
  
  function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }
  
  function _inherits(subClass, superClass) { if (typeof superClass !== "function" && superClass !== null) { throw new TypeError("Super expression must either be null or a function"); } subClass.prototype = Object.create(superClass && superClass.prototype, { constructor: { value: subClass, writable: true, configurable: true } }); if (superClass) _setPrototypeOf(subClass, superClass); }
  
  function _setPrototypeOf(o, p) { _setPrototypeOf = Object.setPrototypeOf || function _setPrototypeOf(o, p) { o.__proto__ = p; return o; }; return _setPrototypeOf(o, p); }
  
  function _createSuper(Derived) { var hasNativeReflectConstruct = _isNativeReflectConstruct(); return function _createSuperInternal() { var Super = _getPrototypeOf(Derived), result; if (hasNativeReflectConstruct) { var NewTarget = _getPrototypeOf(this).constructor; result = Reflect.construct(Super, arguments, NewTarget); } else { result = Super.apply(this, arguments); } return _possibleConstructorReturn(this, result); }; }
  
  function _possibleConstructorReturn(self, call) { if (call && (_typeof(call) === "object" || typeof call === "function")) { return call; } return _assertThisInitialized(self); }
  
  function _assertThisInitialized(self) { if (self === void 0) { throw new ReferenceError("this hasn't been initialised - super() hasn't been called"); } return self; }
  
  function _isNativeReflectConstruct() { if (typeof Reflect === "undefined" || !Reflect.construct) return false; if (Reflect.construct.sham) return false; if (typeof Proxy === "function") return true; try { Date.prototype.toString.call(Reflect.construct(Date, [], function () {})); return true; } catch (e) { return false; } }
  
  function _getPrototypeOf(o) { _getPrototypeOf = Object.setPrototypeOf ? Object.getPrototypeOf : function _getPrototypeOf(o) { return o.__proto__ || Object.getPrototypeOf(o); }; return _getPrototypeOf(o); }
  
  
  
  
  var App = /*#__PURE__*/function (_React$Component) {
    _inherits(App, _React$Component);
  
    var _super = _createSuper(App);
  
    function App(props) {
      _classCallCheck(this, App);
  
      return _super.call(this, props);
    }
  
    _createClass(App, [{
      key: "render",
      value: function render() {
        return /*#__PURE__*/!(function webpackMissingModule() { var e = new Error("Cannot find module 'react'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).createElement(_Beer_jsx__WEBPACK_IMPORTED_MODULE_1___default.a, null);
      }
    }]);
  
    return App;
  }(!(function webpackMissingModule() { var e = new Error("Cannot find module 'react'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).Component);
  
  
  
  /***/ }),
  
  /***/ "./resources/js/App/Components/Beer.jsx":
  /*!**********************************************!*\
    !*** ./resources/js/App/Components/Beer.jsx ***!
    \**********************************************/
  /*! no static exports found */
  /***/ (function(module, exports) {
  
  throw new Error("Module build failed (from ./node_modules/babel-loader/lib/index.js):\nSyntaxError: C:\\Web\\bootcamp\\projects\\Products\\final-project\\resources\\js\\App\\Components\\Beer.jsx: Support for the experimental syntax 'classProperties' isn't currently enabled (13:21):\n\n\u001b[0m \u001b[90m 11 | \u001b[39m  }\u001b[0m\n\u001b[0m \u001b[90m 12 | \u001b[39m\u001b[0m\n\u001b[0m\u001b[31m\u001b[1m>\u001b[22m\u001b[39m\u001b[90m 13 | \u001b[39m  componentDidMount \u001b[33m=\u001b[39m () \u001b[33m=>\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m    | \u001b[39m                    \u001b[31m\u001b[1m^\u001b[22m\u001b[39m\u001b[0m\n\u001b[0m \u001b[90m 14 | \u001b[39m    fetch(\u001b[32m'/aip/beers'\u001b[39m\u001b[33m,\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m 15 | \u001b[39m      headers\u001b[33m:\u001b[39m {\u001b[0m\n\u001b[0m \u001b[90m 16 | \u001b[39m      \u001b[32m'Accept'\u001b[39m\u001b[33m:\u001b[39m       \u001b[32m'application/json'\u001b[39m\u001b[33m,\u001b[39m \u001b[90m// we expect JSON as response\u001b[39m\u001b[0m\n\nAdd @babel/plugin-proposal-class-properties (https://git.io/vb4SL) to the 'plugins' section of your Babel config to enable transformation.\nIf you want to leave it as-is, add @babel/plugin-syntax-class-properties (https://git.io/vb4yQ) to the 'plugins' section to enable parsing.\n    at Object._raise (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:746:17)\n    at Object.raiseWithData (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:739:17)\n    at Object.expectPlugin (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:8812:18)\n    at Object.parseClassProperty (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12185:12)\n    at Object.pushClassProperty (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12145:30)\n    at Object.parseClassMemberWithIsStatic (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12078:14)\n    at Object.parseClassMember (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12015:10)\n    at C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11960:14\n    at Object.withTopicForbiddingContext (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11031:14)\n    at Object.parseClassBody (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11937:10)\n    at Object.parseClass (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11911:22)\n    at Object.parseExportDefaultExpression (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12347:19)\n    at Object.parseExport (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12260:31)\n    at Object.parseStatementContent (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11260:27)\n    at Object.parseStatement (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11156:17)\n    at Object.parseBlockOrModuleBlockBody (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11731:25)\n    at Object.parseBlockBody (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11717:10)\n    at Object.parseTopLevel (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:11087:10)\n    at Object.parse (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12768:10)\n    at parse (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\parser\\lib\\index.js:12821:38)\n    at parser (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\core\\lib\\parser\\index.js:54:34)\n    at parser.next (<anonymous>)\n    at normalizeFile (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\core\\lib\\transformation\\normalize-file.js:93:38)\n    at normalizeFile.next (<anonymous>)\n    at run (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\core\\lib\\transformation\\index.js:31:50)\n    at run.next (<anonymous>)\n    at Function.transform (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\@babel\\core\\lib\\transform.js:27:41)\n    at transform.next (<anonymous>)\n    at step (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\gensync\\index.js:254:32)\n    at C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\gensync\\index.js:266:13\n    at async.call.result.err.err (C:\\Web\\bootcamp\\projects\\Products\\final-project\\node_modules\\gensync\\index.js:216:11)");
  
  /***/ }),
  
  /***/ "./resources/js/app.js":
  /*!*****************************!*\
    !*** ./resources/js/app.js ***!
    \*****************************/
  /*! no exports provided */
  /***/ (function(module, __webpack_exports__, __webpack_require__) {
  
  "use strict";
  __webpack_require__.r(__webpack_exports__);
  !(function webpackMissingModule() { var e = new Error("Cannot find module 'react'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
  !(function webpackMissingModule() { var e = new Error("Cannot find module 'react-dom'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());
  /* harmony import */ var _App_Components_App_jsx__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./App/Components/App.jsx */ "./resources/js/App/Components/App.jsx");
  
  
  
  !(function webpackMissingModule() { var e = new Error("Cannot find module 'react-dom'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).render( /*#__PURE__*/!(function webpackMissingModule() { var e = new Error("Cannot find module 'react'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()).createElement(_App_Components_App_jsx__WEBPACK_IMPORTED_MODULE_1__["default"], null), document.getElementById('app'));
  
  /***/ }),
  
  /***/ "./resources/sass/app.scss":
  /*!*********************************!*\
    !*** ./resources/sass/app.scss ***!
    \*********************************/
  /*! no static exports found */
  /***/ (function(module, exports) {
  
  // removed by extract-text-webpack-plugin
  
  /***/ }),
  
  /***/ 0:
  /*!*************************************************************!*\
    !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
    \*************************************************************/
  /*! no static exports found */
  /***/ (function(module, exports, __webpack_require__) {
  
  __webpack_require__(/*! C:\Web\bootcamp\projects\Products\final-project\resources\js\app.js */"./resources/js/app.js");
  module.exports = __webpack_require__(/*! C:\Web\bootcamp\projects\Products\final-project\resources\sass\app.scss */"./resources/sass/app.scss");
  
  
  /***/ })
  
  /******/ });
  //# sourceMappingURL=app.js.map