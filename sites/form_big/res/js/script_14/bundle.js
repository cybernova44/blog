(function(a){function b(d){if(c[d])return c[d].exports;var e=c[d]={i:d,l:!1,exports:{}};return a[d].call(e.exports,e,e.exports,b),e.l=!0,e.exports}var c={};return b.m=a,b.c=c,b.d=function(a,c,d){b.o(a,c)||Object.defineProperty(a,c,{enumerable:!0,get:d})},b.r=function(a){'undefined'!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(a,Symbol.toStringTag,{value:'Module'}),Object.defineProperty(a,'__esModule',{value:!0})},b.t=function(a,c){if(1&c&&(a=b(a)),8&c)return a;if(4&c&&'object'==typeof a&&a&&a.__esModule)return a;var d=Object.create(null);if(b.r(d),Object.defineProperty(d,'default',{enumerable:!0,value:a}),2&c&&'string'!=typeof a)for(var e in a)b.d(d,e,function(b){return a[b]}.bind(null,e));return d},b.n=function(a){var c=a&&a.__esModule?function(){return a['default']}:function(){return a};return b.d(c,'a',c),c},b.o=function(a,b){return Object.prototype.hasOwnProperty.call(a,b)},b.p='',b(b.s='./src/app.js')})({"./src/app.js":/*!********************!*\
  !*** ./src/app.js ***!
  \********************//*! no exports provided */function(module,__webpack_exports__,__webpack_require__){'use strict';eval('__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _lockexit_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./lockexit.js */ "./src/lockexit.js");\n\n\nwindow.onload = function () {\n  var lockexitDelay = parseInt(window.lockexitDelay, 10);\n\n  if (isNaN(lockexitDelay) || typeof lockexitDelay === \'undefined\') {\n    lockexitDelay = 0;\n  }\n\n  window.lockexit = new _lockexit_js__WEBPACK_IMPORTED_MODULE_0__["default"]({\n    delay: lockexitDelay\n  });\n  window.DisableExitTraffic = window.lockexit.changePreventLockExit;\n};\n\n//# sourceURL=webpack:///./src/app.js?')},"./src/lockexit.js":/*!*************************!*\
  !*** ./src/lockexit.js ***!
  \*************************//*! exports provided: default */function(module,__webpack_exports__,__webpack_require__){'use strict';eval('__webpack_require__.r(__webpack_exports__);\n/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return LockExit; });\nfunction _createForOfIteratorHelper(o, allowArrayLike) { var it; if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = o[Symbol.iterator](); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it["return"] != null) it["return"](); } finally { if (didErr) throw err; } } }; }\n\nfunction _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }\n\nfunction _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }\n\nfunction _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nvar LockExit = function LockExit(_ref) {\n  var _this = this;\n\n  var delay = _ref.delay;\n\n  _classCallCheck(this, LockExit);\n\n  _defineProperty(this, "preventLockExit", false);\n\n  _defineProperty(this, "exitDiv", document.getElementById("ExitDiv"));\n\n  _defineProperty(this, "exitBackDiv", document.getElementById("ExitBackDiv"));\n\n  _defineProperty(this, "exitRedirect", document.getElementById("exitRedirect"));\n\n  _defineProperty(this, "exitText", document.getElementById("exitText"));\n\n  _defineProperty(this, "init", function () {\n    _this.bindElementsToPreventLockExit();\n\n    _this.bindLockExit();\n  });\n\n  _defineProperty(this, "bindElementsToPreventLockExit", function () {\n    var forms = document.querySelectorAll(\'form\');\n    var hrefs = document.querySelectorAll(\'a\');\n\n    var _iterator = _createForOfIteratorHelper(forms),\n        _step;\n\n    try {\n      for (_iterator.s(); !(_step = _iterator.n()).done;) {\n        var form = _step.value;\n        // this.bindChangePreventLockExit(form, \'submit\');\n        // this.bindChangePreventLockExit(form, \'click\');\n        var button = form.querySelector(\'button[type=submit]\');\n\n        if (button) {\n          _this.bindChangePreventLockExit(button, \'click\');\n        }\n      }\n    } catch (err) {\n      _iterator.e(err);\n    } finally {\n      _iterator.f();\n    }\n\n    var _iterator2 = _createForOfIteratorHelper(hrefs),\n        _step2;\n\n    try {\n      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {\n        var href = _step2.value;\n\n        _this.bindChangePreventLockExit(href, \'click\');\n      }\n    } catch (err) {\n      _iterator2.e(err);\n    } finally {\n      _iterator2.f();\n    }\n  });\n\n  _defineProperty(this, "bindChangePreventLockExit", function (element, eventName) {\n    element.addEventListener(eventName, function () {\n      return _this.changePreventLockExit();\n    }, false);\n  });\n\n  _defineProperty(this, "changePreventLockExit", function () {\n    var preventLockExit = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : true;\n    _this.preventLockExit = preventLockExit;\n  });\n\n  _defineProperty(this, "bindLockExit", function () {\n    window.onbeforeunload = _this.splashLockExit;\n  });\n\n  _defineProperty(this, "unBindLockExit", function () {\n    window.onbeforeunload = null;\n  });\n\n  _defineProperty(this, "splashLockExit", function () {\n    if (!_this.preventLockExit) {\n      _this.displayLockExitInfo();\n\n      _this.forceRedirect();\n\n      return _this.displayConfirmAlert();\n    }\n\n    _this.changePreventLockExit(false);\n  });\n\n  _defineProperty(this, "forceRedirect", function () {\n    setTimeout(function () {\n      window.location.href = _this.exitRedirect.textContent;\n    }, 500);\n\n    _this.unBindLockExit();\n  });\n\n  _defineProperty(this, "displayConfirmAlert", function () {\n    var exitTextContent = _this.exitText.textContent;\n\n    if (window.event) {\n      window.event.returnValue = exitTextContent;\n    }\n\n    return exitTextContent;\n  });\n\n  _defineProperty(this, "displayLockExitInfo", function () {\n    window.scrollTo(0, 0);\n    _this.exitBackDiv.style.visibility = "visible";\n    _this.exitBackDiv.style.display = "block";\n    _this.exitDiv.style.visibility = "visible";\n    _this.exitDiv.style.display = "block";\n  });\n\n  if (!!delay) {\n    setTimeout(function () {\n      _this.init();\n    }, delay * 1000);\n    return;\n  }\n\n  this.init();\n};\n\n\n\n//# sourceURL=webpack:///./src/lockexit.js?')}});