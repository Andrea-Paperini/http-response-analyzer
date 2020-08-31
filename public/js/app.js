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

/***/ "./src/js/app.js":
/*!***********************!*\
  !*** ./src/js/app.js ***!
  \***********************/
/*! no static exports found */
/***/ (function(module, exports) {

window.onload = function () {};

var gauge = new Gauge({
  renderTo: 'gauge',
  // Dimensione del ddd
  width: 400,
  height: 400,
  // Attiva i contorni luminescenti
  glow: true,
  // Visualizza l'unità di misura
  // utilizzata dal tachimetro
  units: 'Km/h',
  title: 'Contachilometri',
  // Valore minimo della scala
  minValue: 0,
  // e valore massimo
  maxValue: 220,
  // Lista delle cifre sul tachimetro
  // per le quali vogliamo le tacche grandi
  majorTicks: ['0', '20', '40', '60', '80', '100', '120', '140', '160', '180', '200', '220'],
  // Quante tacche intermedie
  // ci sono tra ogni tacca grande?
  minorTicks: 2,
  // Qui definisco dei colori
  // di sfondo per le tacche a seconda del valore

  /*highlights : [
  { from : 0, to : 100, color :
  'rgba(0, 255, 0, .15)' },
  { from : 100, to : 160, color :
  'rgba(255, 255, 0, .15)' },
  { from : 160, to : 220, color :
  'rgba(255, 30, 0, .25)' }
  ],*/
  // Questi sono i colori dei
  // vari componenti del tachimetro
  colors: {
    plate: '#222',
    majorTicks: '#f5f5f5',
    minorTicks: '#ddd',
    title: '#fff',
    units: '#ccc',
    numbers: '#eee',
    needle: {
      start: 'rgba(240, 128, 128, 1)',
      end: 'rgba(255, 160, 122, .9)'
    }
  }
}); // Piccola funzione che aggiorna il tachimetro
// con un valore casuale fino a un massimo di 220
// ogni 1000 millisecondi, cioé una volta al secondo.

gauge.onready = function () {
  setInterval(function () {
    gauge.setValue(Math.random() * 220);
  }, 1000);
};

gauge.draw();

/***/ }),

/***/ "./src/scss/app.scss":
/*!***************************!*\
  !*** ./src/scss/app.scss ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!*************************************************!*\
  !*** multi ./src/js/app.js ./src/scss/app.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\Users\Andre\Documents\Classe\Test\prova\src\js\app.js */"./src/js/app.js");
module.exports = __webpack_require__(/*! C:\Users\Andre\Documents\Classe\Test\prova\src\scss\app.scss */"./src/scss/app.scss");


/***/ })

/******/ });