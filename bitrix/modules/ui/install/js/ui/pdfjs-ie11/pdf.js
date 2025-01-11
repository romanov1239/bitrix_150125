/**
 * @licstart The following is the entire license notice for the
 * Javascript code in this page
 *
 * Copyright 2018 Mozilla Foundation
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 * @licend The above is the entire license notice for the
 * Javascript code in this page
 */

(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory();
	else if(typeof define === 'function' && define.amd)
		define("pdfjs-dist/build/pdf", [], factory);
	else if(typeof exports === 'object')
		exports["pdfjs-dist/build/pdf"] = factory();
	else
		root["pdfjs-dist/build/pdf"] = root.pdfjsLib = factory();
})(this, function() {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __w_pdfjs_require__(moduleId) {
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
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __w_pdfjs_require__);
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
/******/ 	__w_pdfjs_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__w_pdfjs_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__w_pdfjs_require__.d = function(exports, name, getter) {
/******/ 		if(!__w_pdfjs_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__w_pdfjs_require__.r = function(exports) {
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
/******/ 	__w_pdfjs_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __w_pdfjs_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__w_pdfjs_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __w_pdfjs_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__w_pdfjs_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__w_pdfjs_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__w_pdfjs_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__w_pdfjs_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __w_pdfjs_require__(__w_pdfjs_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


__w_pdfjs_require__(1);

var pdfjsVersion = '2.0.943';
var pdfjsBuild = 'dc98bf76';
var pdfjsSharedUtil = __w_pdfjs_require__(332);
var pdfjsDisplayAPI = __w_pdfjs_require__(352);
var pdfjsDisplayTextLayer = __w_pdfjs_require__(367);
var pdfjsDisplayAnnotationLayer = __w_pdfjs_require__(368);
var pdfjsDisplayDOMUtils = __w_pdfjs_require__(353);
var pdfjsDisplaySVG = __w_pdfjs_require__(369);
var pdfjsDisplayWorkerOptions = __w_pdfjs_require__(358);
var pdfjsDisplayAPICompatibility = __w_pdfjs_require__(355);
{
  var isNodeJS = __w_pdfjs_require__(335);
  if (isNodeJS()) {
    var PDFNodeStream = __w_pdfjs_require__(370).PDFNodeStream;
    pdfjsDisplayAPI.setPDFNetworkStreamFactory(function (params) {
      return new PDFNodeStream(params);
    });
  } else if (typeof Response !== 'undefined' && 'body' in Response.prototype && typeof ReadableStream !== 'undefined') {
    var PDFFetchStream = __w_pdfjs_require__(373).PDFFetchStream;
    pdfjsDisplayAPI.setPDFNetworkStreamFactory(function (params) {
      return new PDFFetchStream(params);
    });
  } else {
    var PDFNetworkStream = __w_pdfjs_require__(374).PDFNetworkStream;
    pdfjsDisplayAPI.setPDFNetworkStreamFactory(function (params) {
      return new PDFNetworkStream(params);
    });
  }
}
exports.build = pdfjsDisplayAPI.build;
exports.version = pdfjsDisplayAPI.version;
exports.getDocument = pdfjsDisplayAPI.getDocument;
exports.LoopbackPort = pdfjsDisplayAPI.LoopbackPort;
exports.PDFDataRangeTransport = pdfjsDisplayAPI.PDFDataRangeTransport;
exports.PDFWorker = pdfjsDisplayAPI.PDFWorker;
exports.renderTextLayer = pdfjsDisplayTextLayer.renderTextLayer;
exports.AnnotationLayer = pdfjsDisplayAnnotationLayer.AnnotationLayer;
var SimpleLinkService = __w_pdfjs_require__(375);
exports.SimpleLinkService = SimpleLinkService;
exports.createPromiseCapability = pdfjsSharedUtil.createPromiseCapability;
exports.PasswordResponses = pdfjsSharedUtil.PasswordResponses;
exports.InvalidPDFException = pdfjsSharedUtil.InvalidPDFException;
exports.MissingPDFException = pdfjsSharedUtil.MissingPDFException;
exports.SVGGraphics = pdfjsDisplaySVG.SVGGraphics;
exports.NativeImageDecoding = pdfjsSharedUtil.NativeImageDecoding;
exports.CMapCompressionType = pdfjsSharedUtil.CMapCompressionType;
exports.PermissionFlag = pdfjsSharedUtil.PermissionFlag;
exports.UnexpectedResponseException = pdfjsSharedUtil.UnexpectedResponseException;
exports.OPS = pdfjsSharedUtil.OPS;
exports.VerbosityLevel = pdfjsSharedUtil.VerbosityLevel;
exports.UNSUPPORTED_FEATURES = pdfjsSharedUtil.UNSUPPORTED_FEATURES;
exports.createValidAbsoluteUrl = pdfjsSharedUtil.createValidAbsoluteUrl;
exports.createObjectURL = pdfjsSharedUtil.createObjectURL;
exports.removeNullCharacters = pdfjsSharedUtil.removeNullCharacters;
exports.shadow = pdfjsSharedUtil.shadow;
exports.Util = pdfjsSharedUtil.Util;
exports.ReadableStream = pdfjsSharedUtil.ReadableStream;
exports.URL = pdfjsSharedUtil.URL;
exports.RenderingCancelledException = pdfjsDisplayDOMUtils.RenderingCancelledException;
exports.getFilenameFromUrl = pdfjsDisplayDOMUtils.getFilenameFromUrl;
exports.LinkTarget = pdfjsDisplayDOMUtils.LinkTarget;
exports.addLinkAttributes = pdfjsDisplayDOMUtils.addLinkAttributes;
exports.loadScript = pdfjsDisplayDOMUtils.loadScript;
exports.GlobalWorkerOptions = pdfjsDisplayWorkerOptions.GlobalWorkerOptions;
exports.apiCompatibilityParams = pdfjsDisplayAPICompatibility.apiCompatibilityParams;

/***/ }),
/* 1 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


__w_pdfjs_require__(2);
__w_pdfjs_require__(327);
__w_pdfjs_require__(329);
if (global._babelPolyfill) {
  throw new Error("only one instance of babel-polyfill is allowed");
}
global._babelPolyfill = true;
var DEFINE_PROPERTY = "defineProperty";
function define(O, key, value) {
  O[key] || Object[DEFINE_PROPERTY](O, key, {
    writable: true,
    configurable: true,
    value: value
  });
}
define(String.prototype, "padLeft", "".padStart);
define(String.prototype, "padRight", "".padEnd);
"pop,reverse,shift,keys,values,entries,indexOf,every,some,forEach,map,filter,find,findIndex,includes,join,slice,concat,push,splice,unshift,sort,lastIndexOf,reduce,reduceRight,copyWithin,fill".split(",").forEach(function (key) {
  [][key] && define(Array, key, Function.call.bind([][key]));
});

/***/ }),
/* 2 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


__w_pdfjs_require__(3);
__w_pdfjs_require__(51);
__w_pdfjs_require__(52);
__w_pdfjs_require__(53);
__w_pdfjs_require__(54);
__w_pdfjs_require__(56);
__w_pdfjs_require__(59);
__w_pdfjs_require__(60);
__w_pdfjs_require__(61);
__w_pdfjs_require__(62);
__w_pdfjs_require__(63);
__w_pdfjs_require__(64);
__w_pdfjs_require__(65);
__w_pdfjs_require__(66);
__w_pdfjs_require__(67);
__w_pdfjs_require__(69);
__w_pdfjs_require__(71);
__w_pdfjs_require__(73);
__w_pdfjs_require__(75);
__w_pdfjs_require__(78);
__w_pdfjs_require__(79);
__w_pdfjs_require__(80);
__w_pdfjs_require__(84);
__w_pdfjs_require__(86);
__w_pdfjs_require__(88);
__w_pdfjs_require__(91);
__w_pdfjs_require__(92);
__w_pdfjs_require__(93);
__w_pdfjs_require__(94);
__w_pdfjs_require__(96);
__w_pdfjs_require__(97);
__w_pdfjs_require__(98);
__w_pdfjs_require__(99);
__w_pdfjs_require__(100);
__w_pdfjs_require__(101);
__w_pdfjs_require__(102);
__w_pdfjs_require__(104);
__w_pdfjs_require__(105);
__w_pdfjs_require__(106);
__w_pdfjs_require__(108);
__w_pdfjs_require__(109);
__w_pdfjs_require__(110);
__w_pdfjs_require__(112);
__w_pdfjs_require__(114);
__w_pdfjs_require__(115);
__w_pdfjs_require__(116);
__w_pdfjs_require__(117);
__w_pdfjs_require__(118);
__w_pdfjs_require__(119);
__w_pdfjs_require__(120);
__w_pdfjs_require__(121);
__w_pdfjs_require__(122);
__w_pdfjs_require__(123);
__w_pdfjs_require__(124);
__w_pdfjs_require__(125);
__w_pdfjs_require__(126);
__w_pdfjs_require__(131);
__w_pdfjs_require__(132);
__w_pdfjs_require__(136);
__w_pdfjs_require__(137);
__w_pdfjs_require__(138);
__w_pdfjs_require__(139);
__w_pdfjs_require__(141);
__w_pdfjs_require__(142);
__w_pdfjs_require__(143);
__w_pdfjs_require__(144);
__w_pdfjs_require__(145);
__w_pdfjs_require__(146);
__w_pdfjs_require__(147);
__w_pdfjs_require__(148);
__w_pdfjs_require__(149);
__w_pdfjs_require__(150);
__w_pdfjs_require__(151);
__w_pdfjs_require__(152);
__w_pdfjs_require__(153);
__w_pdfjs_require__(154);
__w_pdfjs_require__(155);
__w_pdfjs_require__(157);
__w_pdfjs_require__(158);
__w_pdfjs_require__(160);
__w_pdfjs_require__(161);
__w_pdfjs_require__(167);
__w_pdfjs_require__(168);
__w_pdfjs_require__(170);
__w_pdfjs_require__(171);
__w_pdfjs_require__(172);
__w_pdfjs_require__(176);
__w_pdfjs_require__(177);
__w_pdfjs_require__(178);
__w_pdfjs_require__(179);
__w_pdfjs_require__(180);
__w_pdfjs_require__(182);
__w_pdfjs_require__(183);
__w_pdfjs_require__(184);
__w_pdfjs_require__(185);
__w_pdfjs_require__(188);
__w_pdfjs_require__(190);
__w_pdfjs_require__(191);
__w_pdfjs_require__(192);
__w_pdfjs_require__(194);
__w_pdfjs_require__(196);
__w_pdfjs_require__(198);
__w_pdfjs_require__(200);
__w_pdfjs_require__(201);
__w_pdfjs_require__(202);
__w_pdfjs_require__(206);
__w_pdfjs_require__(207);
__w_pdfjs_require__(208);
__w_pdfjs_require__(210);
__w_pdfjs_require__(220);
__w_pdfjs_require__(224);
__w_pdfjs_require__(225);
__w_pdfjs_require__(227);
__w_pdfjs_require__(228);
__w_pdfjs_require__(232);
__w_pdfjs_require__(233);
__w_pdfjs_require__(235);
__w_pdfjs_require__(236);
__w_pdfjs_require__(237);
__w_pdfjs_require__(238);
__w_pdfjs_require__(239);
__w_pdfjs_require__(240);
__w_pdfjs_require__(241);
__w_pdfjs_require__(242);
__w_pdfjs_require__(243);
__w_pdfjs_require__(244);
__w_pdfjs_require__(245);
__w_pdfjs_require__(246);
__w_pdfjs_require__(247);
__w_pdfjs_require__(248);
__w_pdfjs_require__(249);
__w_pdfjs_require__(250);
__w_pdfjs_require__(251);
__w_pdfjs_require__(252);
__w_pdfjs_require__(253);
__w_pdfjs_require__(255);
__w_pdfjs_require__(256);
__w_pdfjs_require__(257);
__w_pdfjs_require__(258);
__w_pdfjs_require__(259);
__w_pdfjs_require__(261);
__w_pdfjs_require__(262);
__w_pdfjs_require__(263);
__w_pdfjs_require__(265);
__w_pdfjs_require__(266);
__w_pdfjs_require__(267);
__w_pdfjs_require__(268);
__w_pdfjs_require__(269);
__w_pdfjs_require__(270);
__w_pdfjs_require__(271);
__w_pdfjs_require__(272);
__w_pdfjs_require__(274);
__w_pdfjs_require__(275);
__w_pdfjs_require__(277);
__w_pdfjs_require__(278);
__w_pdfjs_require__(279);
__w_pdfjs_require__(280);
__w_pdfjs_require__(283);
__w_pdfjs_require__(284);
__w_pdfjs_require__(286);
__w_pdfjs_require__(287);
__w_pdfjs_require__(288);
__w_pdfjs_require__(289);
__w_pdfjs_require__(291);
__w_pdfjs_require__(292);
__w_pdfjs_require__(293);
__w_pdfjs_require__(294);
__w_pdfjs_require__(295);
__w_pdfjs_require__(296);
__w_pdfjs_require__(297);
__w_pdfjs_require__(298);
__w_pdfjs_require__(299);
__w_pdfjs_require__(300);
__w_pdfjs_require__(302);
__w_pdfjs_require__(303);
__w_pdfjs_require__(304);
__w_pdfjs_require__(305);
__w_pdfjs_require__(306);
__w_pdfjs_require__(307);
__w_pdfjs_require__(308);
__w_pdfjs_require__(309);
__w_pdfjs_require__(310);
__w_pdfjs_require__(311);
__w_pdfjs_require__(312);
__w_pdfjs_require__(314);
__w_pdfjs_require__(315);
__w_pdfjs_require__(316);
__w_pdfjs_require__(317);
__w_pdfjs_require__(318);
__w_pdfjs_require__(319);
__w_pdfjs_require__(320);
__w_pdfjs_require__(321);
__w_pdfjs_require__(322);
__w_pdfjs_require__(323);
__w_pdfjs_require__(324);
__w_pdfjs_require__(325);
__w_pdfjs_require__(326);
module.exports = __w_pdfjs_require__(9);

/***/ }),
/* 3 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var global = __w_pdfjs_require__(4);
var has = __w_pdfjs_require__(5);
var DESCRIPTORS = __w_pdfjs_require__(6);
var $export = __w_pdfjs_require__(8);
var redefine = __w_pdfjs_require__(18);
var META = __w_pdfjs_require__(22).KEY;
var $fails = __w_pdfjs_require__(7);
var shared = __w_pdfjs_require__(23);
var setToStringTag = __w_pdfjs_require__(25);
var uid = __w_pdfjs_require__(19);
var wks = __w_pdfjs_require__(26);
var wksExt = __w_pdfjs_require__(27);
var wksDefine = __w_pdfjs_require__(28);
var enumKeys = __w_pdfjs_require__(29);
var isArray = __w_pdfjs_require__(44);
var anObject = __w_pdfjs_require__(12);
var isObject = __w_pdfjs_require__(13);
var toIObject = __w_pdfjs_require__(32);
var toPrimitive = __w_pdfjs_require__(16);
var createDesc = __w_pdfjs_require__(17);
var _create = __w_pdfjs_require__(45);
var gOPNExt = __w_pdfjs_require__(48);
var $GOPD = __w_pdfjs_require__(50);
var $DP = __w_pdfjs_require__(11);
var $keys = __w_pdfjs_require__(30);
var gOPD = $GOPD.f;
var dP = $DP.f;
var gOPN = gOPNExt.f;
var $Symbol = global.Symbol;
var $JSON = global.JSON;
var _stringify = $JSON && $JSON.stringify;
var PROTOTYPE = 'prototype';
var HIDDEN = wks('_hidden');
var TO_PRIMITIVE = wks('toPrimitive');
var isEnum = {}.propertyIsEnumerable;
var SymbolRegistry = shared('symbol-registry');
var AllSymbols = shared('symbols');
var OPSymbols = shared('op-symbols');
var ObjectProto = Object[PROTOTYPE];
var USE_NATIVE = typeof $Symbol == 'function';
var QObject = global.QObject;
var setter = !QObject || !QObject[PROTOTYPE] || !QObject[PROTOTYPE].findChild;
var setSymbolDesc = DESCRIPTORS && $fails(function () {
  return _create(dP({}, 'a', {
    get: function get() {
      return dP(this, 'a', { value: 7 }).a;
    }
  })).a != 7;
}) ? function (it, key, D) {
  var protoDesc = gOPD(ObjectProto, key);
  if (protoDesc) delete ObjectProto[key];
  dP(it, key, D);
  if (protoDesc && it !== ObjectProto) dP(ObjectProto, key, protoDesc);
} : dP;
var wrap = function wrap(tag) {
  var sym = AllSymbols[tag] = _create($Symbol[PROTOTYPE]);
  sym._k = tag;
  return sym;
};
var isSymbol = USE_NATIVE && _typeof($Symbol.iterator) == 'symbol' ? function (it) {
  return (typeof it === 'undefined' ? 'undefined' : _typeof(it)) == 'symbol';
} : function (it) {
  return it instanceof $Symbol;
};
var $defineProperty = function defineProperty(it, key, D) {
  if (it === ObjectProto) $defineProperty(OPSymbols, key, D);
  anObject(it);
  key = toPrimitive(key, true);
  anObject(D);
  if (has(AllSymbols, key)) {
    if (!D.enumerable) {
      if (!has(it, HIDDEN)) dP(it, HIDDEN, createDesc(1, {}));
      it[HIDDEN][key] = true;
    } else {
      if (has(it, HIDDEN) && it[HIDDEN][key]) it[HIDDEN][key] = false;
      D = _create(D, { enumerable: createDesc(0, false) });
    }
    return setSymbolDesc(it, key, D);
  }
  return dP(it, key, D);
};
var $defineProperties = function defineProperties(it, P) {
  anObject(it);
  var keys = enumKeys(P = toIObject(P));
  var i = 0;
  var l = keys.length;
  var key;
  while (l > i) {
    $defineProperty(it, key = keys[i++], P[key]);
  }return it;
};
var $create = function create(it, P) {
  return P === undefined ? _create(it) : $defineProperties(_create(it), P);
};
var $propertyIsEnumerable = function propertyIsEnumerable(key) {
  var E = isEnum.call(this, key = toPrimitive(key, true));
  if (this === ObjectProto && has(AllSymbols, key) && !has(OPSymbols, key)) return false;
  return E || !has(this, key) || !has(AllSymbols, key) || has(this, HIDDEN) && this[HIDDEN][key] ? E : true;
};
var $getOwnPropertyDescriptor = function getOwnPropertyDescriptor(it, key) {
  it = toIObject(it);
  key = toPrimitive(key, true);
  if (it === ObjectProto && has(AllSymbols, key) && !has(OPSymbols, key)) return;
  var D = gOPD(it, key);
  if (D && has(AllSymbols, key) && !(has(it, HIDDEN) && it[HIDDEN][key])) D.enumerable = true;
  return D;
};
var $getOwnPropertyNames = function getOwnPropertyNames(it) {
  var names = gOPN(toIObject(it));
  var result = [];
  var i = 0;
  var key;
  while (names.length > i) {
    if (!has(AllSymbols, key = names[i++]) && key != HIDDEN && key != META) result.push(key);
  }
  return result;
};
var $getOwnPropertySymbols = function getOwnPropertySymbols(it) {
  var IS_OP = it === ObjectProto;
  var names = gOPN(IS_OP ? OPSymbols : toIObject(it));
  var result = [];
  var i = 0;
  var key;
  while (names.length > i) {
    if (has(AllSymbols, key = names[i++]) && (IS_OP ? has(ObjectProto, key) : true)) result.push(AllSymbols[key]);
  }
  return result;
};
if (!USE_NATIVE) {
  $Symbol = function _Symbol() {
    if (this instanceof $Symbol) throw TypeError('Symbol is not a constructor!');
    var tag = uid(arguments.length > 0 ? arguments[0] : undefined);
    var $set = function $set(value) {
      if (this === ObjectProto) $set.call(OPSymbols, value);
      if (has(this, HIDDEN) && has(this[HIDDEN], tag)) this[HIDDEN][tag] = false;
      setSymbolDesc(this, tag, createDesc(1, value));
    };
    if (DESCRIPTORS && setter) setSymbolDesc(ObjectProto, tag, {
      configurable: true,
      set: $set
    });
    return wrap(tag);
  };
  redefine($Symbol[PROTOTYPE], 'toString', function toString() {
    return this._k;
  });
  $GOPD.f = $getOwnPropertyDescriptor;
  $DP.f = $defineProperty;
  __w_pdfjs_require__(49).f = gOPNExt.f = $getOwnPropertyNames;
  __w_pdfjs_require__(43).f = $propertyIsEnumerable;
  __w_pdfjs_require__(42).f = $getOwnPropertySymbols;
  if (DESCRIPTORS && !__w_pdfjs_require__(24)) {
    redefine(ObjectProto, 'propertyIsEnumerable', $propertyIsEnumerable, true);
  }
  wksExt.f = function (name) {
    return wrap(wks(name));
  };
}
$export($export.G + $export.W + $export.F * !USE_NATIVE, { Symbol: $Symbol });
for (var es6Symbols = 'hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables'.split(','), j = 0; es6Symbols.length > j;) {
  wks(es6Symbols[j++]);
}for (var wellKnownSymbols = $keys(wks.store), k = 0; wellKnownSymbols.length > k;) {
  wksDefine(wellKnownSymbols[k++]);
}$export($export.S + $export.F * !USE_NATIVE, 'Symbol', {
  'for': function _for(key) {
    return has(SymbolRegistry, key += '') ? SymbolRegistry[key] : SymbolRegistry[key] = $Symbol(key);
  },
  keyFor: function keyFor(sym) {
    if (!isSymbol(sym)) throw TypeError(sym + ' is not a symbol!');
    for (var key in SymbolRegistry) {
      if (SymbolRegistry[key] === sym) return key;
    }
  },
  useSetter: function useSetter() {
    setter = true;
  },
  useSimple: function useSimple() {
    setter = false;
  }
});
$export($export.S + $export.F * !USE_NATIVE, 'Object', {
  create: $create,
  defineProperty: $defineProperty,
  defineProperties: $defineProperties,
  getOwnPropertyDescriptor: $getOwnPropertyDescriptor,
  getOwnPropertyNames: $getOwnPropertyNames,
  getOwnPropertySymbols: $getOwnPropertySymbols
});
$JSON && $export($export.S + $export.F * (!USE_NATIVE || $fails(function () {
  var S = $Symbol();
  return _stringify([S]) != '[null]' || _stringify({ a: S }) != '{}' || _stringify(Object(S)) != '{}';
})), 'JSON', {
  stringify: function stringify(it) {
    var args = [it];
    var i = 1;
    var replacer, $replacer;
    while (arguments.length > i) {
      args.push(arguments[i++]);
    }$replacer = replacer = args[1];
    if (!isObject(replacer) && it === undefined || isSymbol(it)) return;
    if (!isArray(replacer)) replacer = function replacer(key, value) {
      if (typeof $replacer == 'function') value = $replacer.call(this, key, value);
      if (!isSymbol(value)) return value;
    };
    args[1] = replacer;
    return _stringify.apply($JSON, args);
  }
});
$Symbol[PROTOTYPE][TO_PRIMITIVE] || __w_pdfjs_require__(10)($Symbol[PROTOTYPE], TO_PRIMITIVE, $Symbol[PROTOTYPE].valueOf);
setToStringTag($Symbol, 'Symbol');
setToStringTag(Math, 'Math', true);
setToStringTag(global.JSON, 'JSON', true);

/***/ }),
/* 4 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var global = module.exports = typeof window != 'undefined' && window.Math == Math ? window : typeof self != 'undefined' && self.Math == Math ? self : Function('return this')();
if (typeof __g == 'number') __g = global;

/***/ }),
/* 5 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};

/***/ }),
/* 6 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = !__w_pdfjs_require__(7)(function () {
  return Object.defineProperty({}, 'a', {
    get: function get() {
      return 7;
    }
  }).a != 7;
});

/***/ }),
/* 7 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};

/***/ }),
/* 8 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var global = __w_pdfjs_require__(4);
var core = __w_pdfjs_require__(9);
var hide = __w_pdfjs_require__(10);
var redefine = __w_pdfjs_require__(18);
var ctx = __w_pdfjs_require__(20);
var PROTOTYPE = 'prototype';
var $export = function $export(type, name, source) {
  var IS_FORCED = type & $export.F;
  var IS_GLOBAL = type & $export.G;
  var IS_STATIC = type & $export.S;
  var IS_PROTO = type & $export.P;
  var IS_BIND = type & $export.B;
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] || (global[name] = {}) : (global[name] || {})[PROTOTYPE];
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE] || (exports[PROTOTYPE] = {});
  var key, own, out, exp;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    own = !IS_FORCED && target && target[key] !== undefined;
    out = (own ? target : source)[key];
    exp = IS_BIND && own ? ctx(out, global) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    if (target) redefine(target, key, out, type & $export.U);
    if (exports[key] != out) hide(exports, key, exp);
    if (IS_PROTO && expProto[key] != out) expProto[key] = out;
  }
};
global.core = core;
$export.F = 1;
$export.G = 2;
$export.S = 4;
$export.P = 8;
$export.B = 16;
$export.W = 32;
$export.U = 64;
$export.R = 128;
module.exports = $export;

/***/ }),
/* 9 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var core = module.exports = { version: '2.6.2' };
if (typeof __e == 'number') __e = core;

/***/ }),
/* 10 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var dP = __w_pdfjs_require__(11);
var createDesc = __w_pdfjs_require__(17);
module.exports = __w_pdfjs_require__(6) ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};

/***/ }),
/* 11 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var anObject = __w_pdfjs_require__(12);
var IE8_DOM_DEFINE = __w_pdfjs_require__(14);
var toPrimitive = __w_pdfjs_require__(16);
var dP = Object.defineProperty;
exports.f = __w_pdfjs_require__(6) ? Object.defineProperty : function defineProperty(O, P, Attributes) {
  anObject(O);
  P = toPrimitive(P, true);
  anObject(Attributes);
  if (IE8_DOM_DEFINE) try {
    return dP(O, P, Attributes);
  } catch (e) {}
  if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
  if ('value' in Attributes) O[P] = Attributes.value;
  return O;
};

/***/ }),
/* 12 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var isObject = __w_pdfjs_require__(13);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};

/***/ }),
/* 13 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

module.exports = function (it) {
  return (typeof it === 'undefined' ? 'undefined' : _typeof(it)) === 'object' ? it !== null : typeof it === 'function';
};

/***/ }),
/* 14 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = !__w_pdfjs_require__(6) && !__w_pdfjs_require__(7)(function () {
  return Object.defineProperty(__w_pdfjs_require__(15)('div'), 'a', {
    get: function get() {
      return 7;
    }
  }).a != 7;
});

/***/ }),
/* 15 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var isObject = __w_pdfjs_require__(13);
var document = __w_pdfjs_require__(4).document;
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};

/***/ }),
/* 16 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var isObject = __w_pdfjs_require__(13);
module.exports = function (it, S) {
  if (!isObject(it)) return it;
  var fn, val;
  if (S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  if (typeof (fn = it.valueOf) == 'function' && !isObject(val = fn.call(it))) return val;
  if (!S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  throw TypeError("Can't convert object to primitive value");
};

/***/ }),
/* 17 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};

/***/ }),
/* 18 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var global = __w_pdfjs_require__(4);
var hide = __w_pdfjs_require__(10);
var has = __w_pdfjs_require__(5);
var SRC = __w_pdfjs_require__(19)('src');
var TO_STRING = 'toString';
var $toString = Function[TO_STRING];
var TPL = ('' + $toString).split(TO_STRING);
__w_pdfjs_require__(9).inspectSource = function (it) {
  return $toString.call(it);
};
(module.exports = function (O, key, val, safe) {
  var isFunction = typeof val == 'function';
  if (isFunction) has(val, 'name') || hide(val, 'name', key);
  if (O[key] === val) return;
  if (isFunction) has(val, SRC) || hide(val, SRC, O[key] ? '' + O[key] : TPL.join(String(key)));
  if (O === global) {
    O[key] = val;
  } else if (!safe) {
    delete O[key];
    hide(O, key, val);
  } else if (O[key]) {
    O[key] = val;
  } else {
    hide(O, key, val);
  }
})(Function.prototype, TO_STRING, function toString() {
  return typeof this == 'function' && this[SRC] || $toString.call(this);
});

/***/ }),
/* 19 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};

/***/ }),
/* 20 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var aFunction = __w_pdfjs_require__(21);
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1:
      return function (a) {
        return fn.call(that, a);
      };
    case 2:
      return function (a, b) {
        return fn.call(that, a, b);
      };
    case 3:
      return function (a, b, c) {
        return fn.call(that, a, b, c);
      };
  }
  return function () {
    return fn.apply(that, arguments);
  };
};

/***/ }),
/* 21 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};

/***/ }),
/* 22 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var META = __w_pdfjs_require__(19)('meta');
var isObject = __w_pdfjs_require__(13);
var has = __w_pdfjs_require__(5);
var setDesc = __w_pdfjs_require__(11).f;
var id = 0;
var isExtensible = Object.isExtensible || function () {
  return true;
};
var FREEZE = !__w_pdfjs_require__(7)(function () {
  return isExtensible(Object.preventExtensions({}));
});
var setMeta = function setMeta(it) {
  setDesc(it, META, {
    value: {
      i: 'O' + ++id,
      w: {}
    }
  });
};
var fastKey = function fastKey(it, create) {
  if (!isObject(it)) return (typeof it === 'undefined' ? 'undefined' : _typeof(it)) == 'symbol' ? it : (typeof it == 'string' ? 'S' : 'P') + it;
  if (!has(it, META)) {
    if (!isExtensible(it)) return 'F';
    if (!create) return 'E';
    setMeta(it);
  }
  return it[META].i;
};
var getWeak = function getWeak(it, create) {
  if (!has(it, META)) {
    if (!isExtensible(it)) return true;
    if (!create) return false;
    setMeta(it);
  }
  return it[META].w;
};
var onFreeze = function onFreeze(it) {
  if (FREEZE && meta.NEED && isExtensible(it) && !has(it, META)) setMeta(it);
  return it;
};
var meta = module.exports = {
  KEY: META,
  NEED: false,
  fastKey: fastKey,
  getWeak: getWeak,
  onFreeze: onFreeze
};

/***/ }),
/* 23 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var core = __w_pdfjs_require__(9);
var global = __w_pdfjs_require__(4);
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});
(module.exports = function (key, value) {
  return store[key] || (store[key] = value !== undefined ? value : {});
})('versions', []).push({
  version: core.version,
  mode: __w_pdfjs_require__(24) ? 'pure' : 'global',
  copyright: '© 2019 Denis Pushkarev (zloirock.ru)'
});

/***/ }),
/* 24 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = false;

/***/ }),
/* 25 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var def = __w_pdfjs_require__(11).f;
var has = __w_pdfjs_require__(5);
var TAG = __w_pdfjs_require__(26)('toStringTag');
module.exports = function (it, tag, stat) {
  if (it && !has(it = stat ? it : it.prototype, TAG)) def(it, TAG, {
    configurable: true,
    value: tag
  });
};

/***/ }),
/* 26 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var store = __w_pdfjs_require__(23)('wks');
var uid = __w_pdfjs_require__(19);
var _Symbol = __w_pdfjs_require__(4).Symbol;
var USE_SYMBOL = typeof _Symbol == 'function';
var $exports = module.exports = function (name) {
  return store[name] || (store[name] = USE_SYMBOL && _Symbol[name] || (USE_SYMBOL ? _Symbol : uid)('Symbol.' + name));
};
$exports.store = store;

/***/ }),
/* 27 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


exports.f = __w_pdfjs_require__(26);

/***/ }),
/* 28 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var global = __w_pdfjs_require__(4);
var core = __w_pdfjs_require__(9);
var LIBRARY = __w_pdfjs_require__(24);
var wksExt = __w_pdfjs_require__(27);
var defineProperty = __w_pdfjs_require__(11).f;
module.exports = function (name) {
  var $Symbol = core.Symbol || (core.Symbol = LIBRARY ? {} : global.Symbol || {});
  if (name.charAt(0) != '_' && !(name in $Symbol)) defineProperty($Symbol, name, { value: wksExt.f(name) });
};

/***/ }),
/* 29 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var getKeys = __w_pdfjs_require__(30);
var gOPS = __w_pdfjs_require__(42);
var pIE = __w_pdfjs_require__(43);
module.exports = function (it) {
  var result = getKeys(it);
  var getSymbols = gOPS.f;
  if (getSymbols) {
    var symbols = getSymbols(it);
    var isEnum = pIE.f;
    var i = 0;
    var key;
    while (symbols.length > i) {
      if (isEnum.call(it, key = symbols[i++])) result.push(key);
    }
  }
  return result;
};

/***/ }),
/* 30 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var $keys = __w_pdfjs_require__(31);
var enumBugKeys = __w_pdfjs_require__(41);
module.exports = Object.keys || function keys(O) {
  return $keys(O, enumBugKeys);
};

/***/ }),
/* 31 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var has = __w_pdfjs_require__(5);
var toIObject = __w_pdfjs_require__(32);
var arrayIndexOf = __w_pdfjs_require__(36)(false);
var IE_PROTO = __w_pdfjs_require__(40)('IE_PROTO');
module.exports = function (object, names) {
  var O = toIObject(object);
  var i = 0;
  var result = [];
  var key;
  for (key in O) {
    if (key != IE_PROTO) has(O, key) && result.push(key);
  }while (names.length > i) {
    if (has(O, key = names[i++])) {
      ~arrayIndexOf(result, key) || result.push(key);
    }
  }return result;
};

/***/ }),
/* 32 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var IObject = __w_pdfjs_require__(33);
var defined = __w_pdfjs_require__(35);
module.exports = function (it) {
  return IObject(defined(it));
};

/***/ }),
/* 33 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var cof = __w_pdfjs_require__(34);
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};

/***/ }),
/* 34 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var toString = {}.toString;
module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};

/***/ }),
/* 35 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = function (it) {
  if (it == undefined) throw TypeError("Can't call method on  " + it);
  return it;
};

/***/ }),
/* 36 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var toIObject = __w_pdfjs_require__(32);
var toLength = __w_pdfjs_require__(37);
var toAbsoluteIndex = __w_pdfjs_require__(39);
module.exports = function (IS_INCLUDES) {
  return function ($this, el, fromIndex) {
    var O = toIObject($this);
    var length = toLength(O.length);
    var index = toAbsoluteIndex(fromIndex, length);
    var value;
    if (IS_INCLUDES && el != el) while (length > index) {
      value = O[index++];
      if (value != value) return true;
    } else for (; length > index; index++) {
      if (IS_INCLUDES || index in O) {
        if (O[index] === el) return IS_INCLUDES || index || 0;
      }
    }return !IS_INCLUDES && -1;
  };
};

/***/ }),
/* 37 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var toInteger = __w_pdfjs_require__(38);
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0;
};

/***/ }),
/* 38 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};

/***/ }),
/* 39 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var toInteger = __w_pdfjs_require__(38);
var max = Math.max;
var min = Math.min;
module.exports = function (index, length) {
  index = toInteger(index);
  return index < 0 ? max(index + length, 0) : min(index, length);
};

/***/ }),
/* 40 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var shared = __w_pdfjs_require__(23)('keys');
var uid = __w_pdfjs_require__(19);
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};

/***/ }),
/* 41 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


module.exports = 'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'.split(',');

/***/ }),
/* 42 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


exports.f = Object.getOwnPropertySymbols;

/***/ }),
/* 43 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


exports.f = {}.propertyIsEnumerable;

/***/ }),
/* 44 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var cof = __w_pdfjs_require__(34);
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};

/***/ }),
/* 45 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var anObject = __w_pdfjs_require__(12);
var dPs = __w_pdfjs_require__(46);
var enumBugKeys = __w_pdfjs_require__(41);
var IE_PROTO = __w_pdfjs_require__(40)('IE_PROTO');
var Empty = function Empty() {};
var PROTOTYPE = 'prototype';
var _createDict = function createDict() {
  var iframe = __w_pdfjs_require__(15)('iframe');
  var i = enumBugKeys.length;
  var lt = '<';
  var gt = '>';
  var iframeDocument;
  iframe.style.display = 'none';
  __w_pdfjs_require__(47).appendChild(iframe);
  iframe.src = 'javascript:';
  iframeDocument = iframe.contentWindow.document;
  iframeDocument.open();
  iframeDocument.write(lt + 'script' + gt + 'document.F=Object' + lt + '/script' + gt);
  iframeDocument.close();
  _createDict = iframeDocument.F;
  while (i--) {
    delete _createDict[PROTOTYPE][enumBugKeys[i]];
  }return _createDict();
};
module.exports = Object.create || function create(O, Properties) {
  var result;
  if (O !== null) {
    Empty[PROTOTYPE] = anObject(O);
    result = new Empty();
    Empty[PROTOTYPE] = null;
    result[IE_PROTO] = O;
  } else result = _createDict();
  return Properties === undefined ? result : dPs(result, Properties);
};

/***/ }),
/* 46 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var dP = __w_pdfjs_require__(11);
var anObject = __w_pdfjs_require__(12);
var getKeys = __w_pdfjs_require__(30);
module.exports = __w_pdfjs_require__(6) ? Object.defineProperties : function defineProperties(O, Properties) {
  anObject(O);
  var keys = getKeys(Properties);
  var length = keys.length;
  var i = 0;
  var P;
  while (length > i) {
    dP.f(O, P = keys[i++], Properties[P]);
  }return O;
};

/***/ }),
/* 47 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var document = __w_pdfjs_require__(4).document;
module.exports = document && document.documentElement;

/***/ }),
/* 48 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var toIObject = __w_pdfjs_require__(32);
var gOPN = __w_pdfjs_require__(49).f;
var toString = {}.toString;
var windowNames = (typeof window === 'undefined' ? 'undefined' : _typeof(window)) == 'object' && window && Object.getOwnPropertyNames ? Object.getOwnPropertyNames(window) : [];
var getWindowNames = function getWindowNames(it) {
  try {
    return gOPN(it);
  } catch (e) {
    return windowNames.slice();
  }
};
module.exports.f = function getOwnPropertyNames(it) {
  return windowNames && toString.call(it) == '[object Window]' ? getWindowNames(it) : gOPN(toIObject(it));
};

/***/ }),
/* 49 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var $keys = __w_pdfjs_require__(31);
var hiddenKeys = __w_pdfjs_require__(41).concat('length', 'prototype');
exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return $keys(O, hiddenKeys);
};

/***/ }),
/* 50 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var pIE = __w_pdfjs_require__(43);
var createDesc = __w_pdfjs_require__(17);
var toIObject = __w_pdfjs_require__(32);
var toPrimitive = __w_pdfjs_require__(16);
var has = __w_pdfjs_require__(5);
var IE8_DOM_DEFINE = __w_pdfjs_require__(14);
var gOPD = Object.getOwnPropertyDescriptor;
exports.f = __w_pdfjs_require__(6) ? gOPD : function getOwnPropertyDescriptor(O, P) {
  O = toIObject(O);
  P = toPrimitive(P, true);
  if (IE8_DOM_DEFINE) try {
    return gOPD(O, P);
  } catch (e) {}
  if (has(O, P)) return createDesc(!pIE.f.call(O, P), O[P]);
};

/***/ }),
/* 51 */
/***/ (function(module, exports, __w_pdfjs_require__) {

"use strict";


var $expor