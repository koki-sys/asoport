/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/Switch/index.js ***!
  \**************************************/
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var allBtn = document.getElementById("switch_portfolio_all");
var publicBtn = document.getElementById("switch_portfolio_public");
var privateBtn = document.getElementById("switch_portfolio_private");

var eraseDisabled = function eraseDisabled() {
  var portfolioSwitch = document.getElementsByClassName("switch_portfolio_btn");

  var _iterator = _createForOfIteratorHelper(portfolioSwitch),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var pro = _step.value;
      pro.disabled = false;
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
};

var switchAll = function switchAll() {
  // 全てを表示する処理
  eraseDisabled();
  allBtn.disabled = true;
};

var switchPublic = function switchPublic() {
  // 公開を表示する処理
  eraseDisabled();
  publicBtn.disabled = true;
};

var switchPrivate = function switchPrivate() {
  // 非公開を表示する処理
  eraseDisabled();
  privateBtn.disabled = true;
};

allBtn.addEventListener('click', switchAll);
publicBtn.addEventListener('click', switchPublic);
privateBtn.addEventListener('click', switchPrivate);
/******/ })()
;