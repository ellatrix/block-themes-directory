/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "../files/entranceanimations.js":
/*!**************************************!*\
  !*** ../files/entranceanimations.js ***!
  \**************************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const EntranceAnimationsPanel = myprops => {
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    aploeffect,
    aploeffectease,
    aploeffectduration,
    aploeffectdelay
  } = attributes;
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
    title: __('Aplo Entrance Styles', 'aploblocks'),
    initialOpen: false,
    className: "aploentrancestyles"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: __('Effect', 'aploblocks'),
    value: aploeffect,
    options: [{
      label: __('<none>', 'aploblocks'),
      value: ''
    }, {
      label: __('Fade In', 'aploblocks'),
      value: 'fadein'
    }, {
      label: __('Fade Up', 'aploblocks'),
      value: 'fadeup'
    }, {
      label: __('Fade Down', 'aploblocks'),
      value: 'fadedown'
    }, {
      label: __('Scale In', 'aploblocks'),
      value: 'scalein'
    }, {
      label: __('Slide In Left', 'aploblocks'),
      value: 'slideinleft'
    }, {
      label: __('Slide In Right', 'aploblocks'),
      value: 'slideinright'
    }, {
      label: __('Bounce', 'aploblocks'),
      value: 'bounce'
    }, {
      label: __('Rotate In', 'aploblocks'),
      value: 'rotatein'
    }, {
      label: __('Flip In', 'aploblocks'),
      value: 'flipin'
    }, {
      label: __('Roll In Left', 'aploblocks'),
      value: 'rollinleft'
    }, {
      label: __('Roll In Right', 'aploblocks'),
      value: 'rollinright'
    }, {
      label: __('Blur In', 'aploblocks'),
      value: 'blurin'
    }, {
      label: __('Text Expand In', 'aploblocks'),
      value: 'txtexpandin'
    }, {
      label: __('Text Contract In', 'aploblocks'),
      value: 'txtcontractin'
    }, {
      label: __('Text Blur Expand In', 'aploblocks'),
      value: 'txtblurexpandin'
    }, {
      label: __('Text Blur Contract In', 'aploblocks'),
      value: 'txtblurcontractin'
    }],
    onChange: value => {
      setAttributes({
        aploeffect: value
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: __('Easing Function', 'aploblocks'),
    value: aploeffectease,
    options: [{
      label: __('<default>', 'aploblocks'),
      value: ''
    }, {
      label: __('ease (Slow-Fast-Slow)', 'aploblocks'),
      value: 'ease'
    }, {
      label: __('ease-in (Slow-Fast)', 'aploblocks'),
      value: 'ease-in'
    }, {
      label: __('ease-out (Fast-Slow)', 'aploblocks'),
      value: 'ease-out'
    }, {
      label: __('ease-in-out (Slow-Fast-Slow)', 'aploblocks'),
      value: 'ease-in-out'
    }],
    onChange: value => {
      setAttributes({
        aploeffectease: value
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
    label: __('Duration', 'aploblocks'),
    value: aploeffectduration,
    onChange: value => {
      setAttributes({
        aploeffectduration: value
      });
    },
    min: 0,
    max: 5000,
    step: 50,
    allowReset: true
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
    label: __('Delay', 'aploblocks'),
    value: aploeffectdelay,
    onChange: value => {
      setAttributes({
        aploeffectdelay: value
      });
    },
    min: 0,
    max: 5000,
    step: 50,
    allowReset: true
  }));
};
/* harmony default export */ __webpack_exports__["default"] = (EntranceAnimationsPanel);

/***/ }),

/***/ "../files/filtersPanel.js":
/*!********************************!*\
  !*** ../files/filtersPanel.js ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const FiltersPanel = myprops => {
  // Need to understand what I am passing here
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    aplofilters,
    aplofiltersHover,
    backdropFilter,
    hasFilters,
    hasHoverFilters,
    galleryswitch
  } = props.attributes;
  const backdropFilterToggle = () => {
    if (typeof backdropFilter === 'undefined') {
      return;
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.ToggleControl, {
      label: "Backdrop",
      checked: backdropFilter,
      onChange: state => {
        setAttributes({
          backdropFilter: state
        });
      }
    });
  };
  const galleryswitchToggle = () => {
    if (typeof galleryswitch === 'undefined') {
      return;
    }
    //__('Gallery Switch - when true the hover state gets applied to the images in the gallery that are not hovered over','aploblocks')
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('When Gallery Switch is true the hover state gets applied to the images in the gallery that are not hovered over', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.ToggleControl, {
      label: __('Gallery Switch', 'aploblocks'),
      checked: galleryswitch,
      onChange: state => {
        //const att = state ? state : undefined;
        setAttributes({
          galleryswitch: state
        });
      }
    }));
  };
  function rangeControlFilters(thename, min, max, position) {
    function updateValue(value) {
      if (value === undefined && aplofilters === undefined) {
        return;
      }
      ;
      if (value === undefined) {
        // value is undefined then we may be removing a value
        // if the old value is not undefined the value is undefined then remove the value
        if (aplofilters !== undefined && aplofilters[thename] !== undefined) {
          hasFilters === 1 ? setAttributes({
            aplofilters: undefined
          }) : setAttributes({
            aplofilters: {
              ...aplofilters,
              [thename]: undefined
            }
          });
          setAttributes({
            hasFilters: hasFilters - 1
          });
        }
      } else {
        //  the value is defined, adding or changing value
        if (aplofilters === undefined || aplofilters[thename] === undefined) {
          setAttributes({
            hasFilters: hasFilters + 1
          });
        }
        ;
        setAttributes({
          aplofilters: {
            ...aplofilters,
            [thename]: value
          }
        });
      }
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl
    /*label={thename}*/
    /*value={ aplofilters[thename] ? aplofilters[thename] : undefined }*/, {
      value: aplofilters !== undefined ? aplofilters[thename] : undefined,
      onChange: updateValue,
      min: min,
      max: max,
      step: 1
      /*	initialPosition={5} removed the initial position to make it clearer when nothing has been set */,
      allowReset: true
    });
  }
  function rangeControlFiltersHover(thename, min, max, position) {
    function updateValue(value) {
      if (value === undefined && aplofiltersHover === undefined) {
        return;
      }
      ;
      if (value === undefined) {
        // value is undefined then we may be removing a value
        // if the old value is not undefined the value is undefined then remove the value
        if (aplofiltersHover !== undefined && aplofiltersHover[thename] !== undefined) {
          hasHoverFilters === 1 ? setAttributes({
            aplofiltersHover: undefined
          }) : setAttributes({
            aplofiltersHover: {
              ...aplofiltersHover,
              [thename]: undefined
            }
          });
          setAttributes({
            hasHoverFilters: hasHoverFilters - 1
          });
        }
      } else {
        //  the value is defined, adding or changing value
        if (aplofiltersHover === undefined || aplofiltersHover[thename] === undefined) {
          setAttributes({
            hasHoverFilters: hasHoverFilters + 1
          });
        }
        ;
        setAttributes({
          aplofiltersHover: {
            ...aplofiltersHover,
            [thename]: value
          }
        });
      }
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl
    /*label={thename}*/, {
      value: aplofiltersHover !== undefined ? aplofiltersHover[thename] : undefined,
      onChange: updateValue,
      min: min,
      max: max,
      step: 1
      /*initialPosition = {position}*/,
      allowReset: true
    });
  }
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
    title: __('Aplo Filter Styles', 'aploblocks'),
    initialOpen: false,
    className: "aplofilterstyles"
  }, typeof backdropFilter !== 'undefined' ? backdropFilterToggle() : '', typeof galleryswitch !== 'undefined' ? galleryswitchToggle() : '', (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set the values and hover values for each filter.  The left hand value is normal and the right hand value is hover', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aploranges"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Blur', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("blur", 0, 100, 0), rangeControlFiltersHover("blur", 0, 100, 0)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Grayscale', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("grayscale", 0, 100, 0), rangeControlFiltersHover("grayscale", 0, 100, 0)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Sepia', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("sepia", 0, 100, 0), rangeControlFiltersHover("sepia", 0, 100, 0)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Hue', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("hue", 0, 360, 0), rangeControlFiltersHover("hue", 0, 360, 0)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Opacity', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("opacity", 0, 100, 99), rangeControlFiltersHover("opacity", 0, 100, 100)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Invert', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("invert", 0, 100, 0), rangeControlFiltersHover("invert", 0, 100, 0)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Brightness', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("brightness", 0, 500, 100), rangeControlFiltersHover("brightness", 0, 500, 100)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Contrast', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("contrast", 0, 500, 100), rangeControlFiltersHover("contrast", 0, 500, 100)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Saturate', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControlFilters("saturate", 0, 500, 100), rangeControlFiltersHover("saturate", 0, 500, 100)))), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
    title: __('Aplo Shadow Filter', 'aploblocks'),
    initialOpen: false,
    className: "aplofilterstyles"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set the Normal and hover values for the drop shadow filter', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Drop Shadow', 'aploblocks')), "X-offset:", rangeControlFilters("dsx", -30, 30, 0), "Y-offset:", rangeControlFilters("dsy", -30, 30, 0), "Blur:", rangeControlFilters("dsb", 0, 30, 0), "Opacity:", rangeControlFilters("dso", 0, 100, 0), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Drop Shadow Hover', 'aploblocks')), "X-offset:", rangeControlFiltersHover("dsx", -30, 30, 0), "Y-offset:", rangeControlFiltersHover("dsy", -30, 30, 0), "Blur:", rangeControlFiltersHover("dsb", 0, 30, 0), "Opacity:", rangeControlFiltersHover("dso", 0, 100, 0)));
};
/* harmony default export */ __webpack_exports__["default"] = (FiltersPanel);

/***/ }),

/***/ "../files/generalPanel.js":
/*!********************************!*\
  !*** ../files/generalPanel.js ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const GeneralPanel = myprops => {
  // Need to understand what I am passing here
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    aplomask,
    aploclip,
    aploshadow,
    aplotexture,
    aplohoverduration,
    aplohoverease,
    aplozindex
  } = props.attributes;
  const patterngroupSelect = () => {
    if (typeof aplopatterngroup === 'undefined') {
      return;
    }
    (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, "Select a color group for either the group or column blocks");
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
      label: __('Pattern Group', 'aploblocks'),
      labelposition: "left",
      value: aplopatterngroup,
      options: [{
        label: __('<none>', 'aploblocks'),
        value: ''
      }, {
        label: __('Theme', 'aploblocks'),
        value: 'zero'
      }, {
        label: __('Switch FG & BG', 'aploblocks'),
        value: 'one'
      }, {
        label: __('Primary BG', 'aploblocks'),
        value: 'two'
      }, {
        label: __('Tertiary BG', 'aploblocks'),
        value: 'three'
      }],
      onChange: value => {
        setAttributes({
          aplopatterngroup: value
        });
      }
    });
  };

  // change to move pattern group out as it is theme specific
  //{typeof patterngroupSelect !== 'undefined' ?	patterngroupSelect() : ''}

  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
    title: __('Aplo General Styles', 'aplostyles'),
    initialOpen: false,
    className: "aplogeneralstyles"
  }, typeof hdgDecorSelect !== 'undefined' ? hdgDecorSelect() : '', typeof borderSelect !== 'undefined' ? borderSelect() : '', (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Add a preconfigured box-shadow', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: __('Shadow', 'aploblocks'),
    labelPosition: "left",
    value: aploshadow,
    options: [{
      label: __('<none>', 'aploblocks'),
      value: ''
    }, {
      label: __('Small', 'aploblocks'),
      value: 'small'
    }, {
      label: __('Medium', 'aploblocks'),
      value: 'med'
    }, {
      label: __('Large', 'aploblocks'),
      value: 'large'
    }],
    onChange: value => {
      setAttributes({
        aploshadow: value
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set a texture background to the block', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: __('Background', 'aploblocks'),
    labelPosition: "left",
    value: aplotexture,
    options: [{
      label: __('<none>', 'aploblocks'),
      value: ''
    }, {
      label: __('Texture 1', 'aploblocks'),
      value: 'one'
    }, {
      label: __('Texture 2', 'aploblocks'),
      value: 'two'
    }, {
      label: __('Texture 3', 'aploblocks'),
      value: 'three'
    }, {
      label: __('Texture 4', 'aploblocks'),
      value: 'four'
    }, {
      label: __('Texture 5', 'aploblocks'),
      value: 'five'
    }, {
      label: __('Texture 6', 'aploblocks'),
      value: 'six'
    }, {
      label: __('Texture 7', 'aploblocks'),
      value: 'seven'
    }, {
      label: __('Texture 8', 'aploblocks'),
      value: 'eight'
    }, {
      label: __('Texture 9', 'aploblocks'),
      value: 'nine'
    }, {
      label: __('Texture 10', 'aploblocks'),
      value: 'ten'
    }],
    onChange: value => {
      setAttributes({
        aplotexture: value
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Hover Transition Settings')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, "Set the hover transitions if you do not want the default settings"), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
    label: __('Duration', 'aploblocks'),
    labelPosition: "left",
    value: aplohoverduration,
    onChange: value => {
      setAttributes({
        aplohoverduration: value
      });
    },
    min: 0,
    max: 5000,
    step: 50,
    allowReset: true
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
    label: __('Easing', 'aploblocks'),
    labelPosition: "left",
    value: aplohoverease,
    options: [{
      label: __('<default>', 'aploblocks'),
      value: ''
    }, {
      label: __('ease (Slow-Fast-Slow)', 'aploblocks'),
      value: 'ease'
    }, {
      label: __('ease-in (Slow-Fast)', 'aploblocks'),
      value: 'ease-in'
    }, {
      label: __('ease-out (Fast-Slow)', 'aploblocks'),
      value: 'ease-out'
    }, {
      label: __('ease-in-out (Slow-Fast-Slow)', 'aploblocks'),
      value: 'ease-in-out'
    }],
    onChange: value => {
      setAttributes({
        aplohoverease: value
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set the z-index value to make the block appear above or below other blocks', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
    label: __('Z-index', 'aploblocks'),
    value: aplozindex,
    onChange: value => {
      setAttributes({
        aplozindex: value
      });
    },
    min: -5,
    max: 15,
    step: 1,
    allowReset: true
  }));
};
/* harmony default export */ __webpack_exports__["default"] = (GeneralPanel);

/***/ }),

/***/ "../files/maskPanel.js":
/*!*****************************!*\
  !*** ../files/maskPanel.js ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const MaskPanel = myprops => {
  // Need to understand what I am passing here
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    aplomask,
    aploclip
  } = props.attributes;
  const maskSelect = () => {
    if (typeof aplomask === 'undefined') {
      return;
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set a polygon based mask and then adjust the settings of the mask using the clip value', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.SelectControl, {
      label: __('Polygon Mask', 'aploblocks'),
      labelPosition: "left",
      value: aplomask,
      options: [{
        label: __('<none>', 'aploblocks'),
        value: ''
      }, {
        label: __('Point Right', 'aploblocks'),
        value: 'pr'
      }, {
        label: __('Point Left', 'aploblocks'),
        value: 'pl'
      }, {
        label: __('Point Left&Right', 'aploblocks'),
        value: 'plr'
      }, {
        label: __('Lean Right', 'aploblocks'),
        value: 'sr'
      }, {
        label: __('Lean Left', 'aploblocks'),
        value: 'sl'
      }, {
        label: __('Slope Up', 'aploblocks'),
        value: 'su'
      }, {
        label: __('Slope Down', 'aploblocks'),
        value: 'sd'
      }, {
        label: __('Slope Up Bottom', 'aploblocks'),
        value: 'sub'
      }, {
        label: __('Slope Down Bottom', 'aploblocks'),
        value: 'sdb'
      }, {
        label: __('Slope Up Top', 'aploblocks'),
        value: 'sut'
      }, {
        label: __('Slope Down Top', 'aploblocks'),
        value: 'sdt'
      }, {
        label: __('Pinch Left&Right', 'aploblocks'),
        value: 'pilr'
      }, {
        label: __('Pinch Top&Bottom', 'aploblocks'),
        value: 'pitb'
      }

      /*{label:__('Circle', 'aplomask'),value: 'c'},
      {label:__('Ellipse', 'aplomask'),value: 'e'},
      {label:__('Curve on Right', 'aplomask'),value: 'cr'},
      {label:__('Curve on Left', 'aplomask'),value: 'cl'},
      {label:__('Wave Bottom', 'aplomask'),value: 'wb'},
      {label:__('Wave Top', 'aplomask'),value: 'wt'},
      {label:__('Wave All Around', 'aplomask'),value: 'wa'},
      {label:__('Wave All Around Two', 'aplomask'),value: 'wa2'},
      {label:__('Circle Right', 'aplomask'),value: 'cir'},*/],

      onChange: value => {
        setAttributes({
          aplomask: value
        });
      }
    }));
  };
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.PanelBody, {
    title: __('Aplo Mask Style', 'aploblocks'),
    initialOpen: false,
    className: "aplogeneralstyles"
  }, typeof maskSelect !== 'undefined' ? maskSelect() : '', (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
    label: __('Clip value', 'aploblocks'),
    value: aploclip,
    onChange: value => {
      setAttributes({
        aploclip: value
      });
    },
    min: 1,
    max: 50,
    step: 1,
    allowReset: true
  }));
};
/* harmony default export */ __webpack_exports__["default"] = (MaskPanel);

/***/ }),

/***/ "../files/pullPanel.js":
/*!*****************************!*\
  !*** ../files/pullPanel.js ***!
  \*****************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const {
  PanelBody
} = wp.components;
const PullPanel = myprops => {
  // Need to understand what I am passing here
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    aplomargintop,
    aplomarginleft,
    aplomarginright,
    aplomarginbottom,
    haspullstyles
  } = props.attributes;
  function rangeControlPull(att, currentvalue, min, max, position) {
    function updateValue(newvalue) {
      if (newvalue !== 0) {
        setAttributes({
          [att]: newvalue
        });
      } else {
        setAttributes({
          [att]: undefined
        });
      }
      if (currentvalue === undefined && newvalue !== 0) {
        setAttributes({
          haspullstyles: haspullstyles + 1
        });
      } else if (currentvalue !== undefined && (newvalue === undefined || newvalue === 0)) {
        setAttributes({
          haspullstyles: haspullstyles - 1
        });
      }
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl, {
      value: currentvalue,
      onChange: updateValue,
      min: min,
      max: max,
      step: 1,
      allowReset: true,
      initialPosition: position
    });
  }
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PanelBody, {
    title: __('Aplo Pull Styles', 'aploblocks'),
    initialOpen: false,
    className: ""
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Add negative margins to blocks', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, "Pull up"), rangeControlPull("aplomargintop", aplomargintop, -500, 0, 0), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, "Pull down"), rangeControlPull("aplomarginbottom", aplomarginbottom, -500, 0, 0), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, "Pull left"), rangeControlPull("aplomarginleft", aplomarginleft, -500, 0, 0), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, "Pull right"), rangeControlPull("aplomarginright", aplomarginright, -500, 0, 0));
};
/* harmony default export */ __webpack_exports__["default"] = (PullPanel);

/***/ }),

/***/ "../files/registerHook.js":
/*!********************************!*\
  !*** ../files/registerHook.js ***!
  \********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ registerHook; }
/* harmony export */ });
const {
  assign,
  merge
} = lodash;
function registerHook(settings, name, blocksToModify) {
  if (blocksToModify.includes(name)) {
    var newsettings = {};

    // used this code to get variable from the json file for setting default values.  Need more work and thought on types
    // leaving this option out for now.  The trim was important
    //		(getComputedStyle(document.body,null).getPropertyValue('--wp--custom--zoom').trim() === 'true')},

    newsettings = assign(newsettings, settings, {
      attributes: merge(settings.attributes, {
        aploeffect: {
          type: 'string',
          default: ''
        },
        aploeffectease: {
          type: 'string',
          default: ''
        },
        aploeffectduration: {
          type: 'integer',
          default: ''
        },
        aploeffectdelay: {
          type: 'integer',
          default: ''
        },
        aplotexture: {
          type: 'string',
          default: ''
        },
        aploshadow: {
          type: 'string',
          default: ''
        },
        aplomask: {
          type: 'string',
          default: ''
        },
        aplofilters: {
          type: Object,
          default: {}
        },
        aplofiltersHover: {
          type: Object,
          default: {}
        },
        aplotransforms: {
          type: Object,
          default: {}
        },
        aplotransformsHover: {
          type: Object,
          default: {}
        },
        hasFilters: {
          type: 'integer',
          default: 0
        },
        hasHoverFilters: {
          type: 'integer',
          default: 0
        },
        hasTransforms: {
          type: 'integer',
          default: 0
        },
        hasHoverTransforms: {
          type: 'integer',
          default: 0
        },
        aplohoverduration: {
          type: 'integer',
          default: 0
        },
        aplohoverease: {
          type: 'string',
          default: ''
        },
        /*aploposition: { type: 'string', default: ''},*/
        aplozindex: {
          type: 'integer',
          default: 0
        },
        aplomargintop: {
          type: 'integer',
          default: undefined
        },
        aplomarginbottom: {
          type: 'integer',
          default: undefined
        },
        aplomarginleft: {
          type: 'integer',
          default: undefined
        },
        aplomarginright: {
          type: 'integer',
          default: undefined
        },
        /*	aplopositiontop: {type: 'integer', default:0},
        	aplopositionbottom: {type: 'integer', default:0},
        	aplopositionleft: {type: 'integer', default:0},
        	aplopositionright: {type: 'integer', default:0},*/
        aploclip: {
          type: 'integer',
          default: 0
        },
        overflowhidden: {
          type: 'boolean',
          default: false
        },
        haspullstyles: {
          type: 'integer',
          default: 0
        }
        /*aploanimation: {type:'string', default:''},*/
      })
    });

    if (name === 'core/cover') {
      newsettings = assign(newsettings, settings, {
        attributes: merge(settings.attributes, {
          aplocoveroverlay: {
            type: 'boolean',
            default: false
          }
        })
      });
    }
    if (name === 'core/group' || name === 'core/column') {
      newsettings = assign(newsettings, settings, {
        attributes: merge(settings.attributes, {
          aplopatterngroup: {
            type: 'string',
            default: ''
          },
          backdropFilter: {
            type: 'boolean',
            default: false
          }
        })
      });
    }

    /*	if (name === 'core/heading') {
    		newsettings =  assign(newsettings, settings, {
    			attributes: merge(settings.attributes, {
    				aploheadingdecor: {type: 'string',default: ''},
    			}),
    		});
    	}
    */
    if (name === 'core/gallery') {
      newsettings = assign(newsettings, settings, {
        attributes: merge(settings.attributes, {
          galleryswitch: {
            type: 'boolean',
            default: false
          }
          /*	aplozoom: {type: 'boolean',default: false},
          	aplogrowHover: {type: 'boolean',default: false},*/
        })
      });
    }

    ;
    //	name === 'core/image' ? console.log(settings.attributes) : undefined;
    //	console.log("custom zoom settings:" + getComputedStyle(document.body,null).getPropertyValue('--wp--custom--zoom'));
    //	const valuezoom = getComputedStyle(document.body,null).getPropertyValue('--wp--custom--zoom');
    //	const valuezoombool = (valuezoom.trim() === 'true');
    //	valuezoom.trim() === 'true' ? console.log("custom yes it is true") : console.log("custom no it is false");
    //	console.log(`value custom ${valuezoombool}` );
    //	console.log("type custom " + typeof valuezoom);

    return newsettings;
  }
  return settings; // just return settings if no blocks are being modified
}

;

/***/ }),

/***/ "../files/transformsPanel.js":
/*!***********************************!*\
  !*** ../files/transformsPanel.js ***!
  \***********************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__);

/* eslint-disable react/jsx-props-no-spreading, react/prop-types */



// below here for testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const {
  PanelBody,
  ToggleControl
} = wp.components;
const TransformsPanel = myprops => {
  const props = myprops.props;
  const {
    attributes,
    setAttributes
  } = props;
  const {
    overflowhidden,
    aplotransforms,
    aplotransformsHover,
    hasTransforms,
    hasHoverTransforms
  } = attributes;
  function rangeControl(thename, min, max) {
    function updateValue(value) {
      if (value === undefined && aplotransforms === undefined) {
        return;
      }
      ;
      if (value === undefined) {
        // value is undefined then we may be removing a value
        // if the old value is not undefined the value is undefined then remove the value
        if (aplotransforms !== undefined && aplotransforms[thename] !== undefined) {
          hasTransforms === 1 ? setAttributes({
            aplotransforms: undefined
          }) : setAttributes({
            aplotransforms: {
              ...aplotransforms,
              [thename]: undefined
            }
          });
          setAttributes({
            hasTransforms: hasTransforms - 1
          });
        }
      } else {
        //  the value is defined, adding or changing value
        if (aplotransforms === undefined || aplotransforms[thename] === undefined) {
          setAttributes({
            hasTransforms: hasTransforms + 1
          });
        }
        ;
        setAttributes({
          aplotransforms: {
            ...aplotransforms,
            [thename]: value
          }
        });
      }
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl
    /*label={thename}*/, {
      value: aplotransforms !== undefined ? aplotransforms[thename] : undefined,
      onChange: updateValue,
      min: min,
      max: max,
      step: 1,
      allowReset: true
    });
  }
  function rangeControlHover(thename, min, max, type) {
    function updateValue(value) {
      if (value === undefined && aplotransformsHover === undefined) {
        return;
      }
      ;
      if (value === undefined) {
        // value is undefined then we may be removing a value
        // if the old value is not undefined the value is undefined then remove the value
        if (aplotransformsHover !== undefined && aplotransformsHover[thename] !== undefined) {
          hasHoverTransforms === 1 ? setAttributes({
            aplotransformsHover: undefined
          }) : setAttributes({
            aplotransformsHover: {
              ...aplotransformsHover,
              [thename]: undefined
            }
          });
          setAttributes({
            hasHoverTransforms: hasHoverTransforms - 1
          });
        }
      } else {
        //  the value is defined, adding or changing value
        if (aplotransformsHover === undefined || aplotransformsHover[thename] === undefined) {
          setAttributes({
            hasHoverTransforms: hasHoverTransforms + 1
          });
        }
        ;
        setAttributes({
          aplotransformsHover: {
            ...aplotransformsHover,
            [thename]: value
          }
        });
      }
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(_wordpress_components__WEBPACK_IMPORTED_MODULE_2__.RangeControl
    /*label={thename}*/, {
      value: aplotransformsHover !== undefined ? aplotransformsHover[thename] : undefined,
      onChange: updateValue,
      min: min,
      max: max,
      step: 1,
      allowReset: true
    });
  }
  return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(PanelBody, {
    title: __('Aplo Transform Styles', 'aploblocks'),
    initialOpen: false,
    className: "aplofilterstyles"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)(ToggleControl, {
    label: __('Hide overflow'),
    checked: overflowhidden,
    onChange: state => {
      //const att = state ? state : undefined;
      setAttributes({
        overflowhidden: state
      });
    }
  }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("p", null, __('Set the normal and hover values for each transform.  The left hand value is normal and the right hand value is hover', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aploranges"
  }, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Scale', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControl("scale", 1, 200), rangeControlHover("scale", 1, 200)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Rotate', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControl("rotate", -180, 180), rangeControlHover("rotate", -180, 180)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Move Horizontal', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControl("translateX", -200, 200), rangeControlHover("translateX", -200, 200)), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("h2", null, __('Move Vertical', 'aploblocks')), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_0__.createElement)("div", {
    class: "aplorange"
  }, rangeControl("translateY", -200, 200), rangeControlHover("translateY", -200, 200))));
};
/* harmony default export */ __webpack_exports__["default"] = (TransformsPanel);

/***/ }),

/***/ "../files/utils.js":
/*!*************************!*\
  !*** ../files/utils.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "getClasses": function() { return /* binding */ getClasses; },
/* harmony export */   "getInlineHoverTransform": function() { return /* binding */ getInlineHoverTransform; },
/* harmony export */   "getInlineHoverVariable": function() { return /* binding */ getInlineHoverVariable; },
/* harmony export */   "getInlineStylesGeneral": function() { return /* binding */ getInlineStylesGeneral; },
/* harmony export */   "getInlineTransform": function() { return /* binding */ getInlineTransform; },
/* harmony export */   "getInlineVariable": function() { return /* binding */ getInlineVariable; }
/* harmony export */ });
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_0__);

function getInlineStylesGeneral(attributes) {
  return {
    /*	...(attributes.aploposition !== undefined && attributes.aploposition !== '') && {position: attributes.aploposition},*/
    // positioning here isn't really correct - just put it in to allow z-index on group which was static
    ...(attributes.aplozindex !== undefined && attributes.aplozindex !== 0 && {
      "position": "relative",
      zIndex: attributes.aplozindex
    }),
    ...(attributes.aplomargintop !== undefined && attributes.aplomargintop !== 0 && {
      marginTop: attributes.aplomargintop
    }),
    ...(attributes.aplomarginbottom !== undefined && attributes.aplomarginbottom !== 0 && {
      marginBottom: attributes.aplomarginbottom
    }),
    ...(attributes.aplomarginleft !== undefined && attributes.aplomarginleft !== 0 && {
      marginLeft: attributes.aplomarginleft
    }),
    ...(attributes.aplomarginright !== undefined && attributes.aplomarginright !== 0 && {
      marginRight: attributes.aplomarginright
    }),
    /*...(attributes.aplopositiontop !== undefined && attributes.aplopositiontop !== 0) && {top:attributes.aplopositiontop},
    ...(attributes.aplopositionbottom !== undefined && attributes.aplopositionbottom !== 0) && {bottom:attributes.aplopositionbottom},
    ...(attributes.aplopositionleft !== undefined && attributes.aplopositionleft !== 0) && {left:attributes.aplopositionleft},
    ...(attributes.aplopositionright !== undefined && attributes.aplopositionright !== 0) && {right:attributes.aplopositionright},*/
    ...(attributes.aploclip !== undefined && attributes.aploclip !== 0 && {
      "--aplo-clip": attributes.aploclip + "%"
    }),
    ...(attributes.overflowhidden !== undefined && attributes.overflowhidden !== false && {
      "overflow": "hidden"
    }),
    ...(attributes.aploeffectease !== undefined && attributes.aploeffectease !== '' && {
      "--aplo-teti": attributes.aploeffectease
    }),
    ...(attributes.aplohoverease !== undefined && attributes.aplohoverease !== '' && {
      "--aplo-thti": attributes.aplohoverease
    }),
    ...(attributes.aploanimation !== undefined && attributes.aploanimation !== '' && {
      "--aplo-anim": attributes.aploanimation
    })
  };
}
function getInlineVariable(aplofilters) {
  //if (filterHover !== "add") {
  //
  //console.log("got into this function")
  const type = "--aplo-filter-string";

  /* build drop shadow string */
  const shadow = () => {
    if (aplofilters.dsx || aplofilters.dsy) {
      const x = aplofilters.dsx ? aplofilters.dsx + "px " : '0 ';
      const y = aplofilters.dsy ? aplofilters.dsy + "px " : '0 ';
      const b = aplofilters.dsb ? aplofilters.dsb + "px " : '0 ';
      const c = `rgba(var(--aplo-fdsc), `;
      const o = aplofilters.dso ? `${aplofilters.dso / 100})` : `var(--aplo-fdso))`;
      return x + y + b + c + o;
    }
    return undefined;
  };
  const filterString = (aplofilters.invert !== undefined ? `invert(${aplofilters.invert}%) ` : '') + (aplofilters.hue !== undefined ? `hue-rotate(${aplofilters.hue}deg) ` : '') + (aplofilters.saturate !== undefined ? `saturate(${aplofilters.saturate}%) ` : '') + (aplofilters.sepia !== undefined ? `sepia(${aplofilters.sepia}%) ` : '') + (aplofilters.blur !== undefined ? `blur(${aplofilters.blur}px) ` : '') + (aplofilters.grayscale !== undefined ? `grayscale(${aplofilters.grayscale}%) ` : '') + (aplofilters.brightness !== undefined ? `brightness(${aplofilters.brightness}%) ` : '') + (aplofilters.contrast !== undefined ? `contrast(${aplofilters.contrast}%) ` : '') + (aplofilters.opacity !== undefined ? `opacity(${aplofilters.opacity}%) ` : '') + (shadow() ? `drop-shadow(${shadow()})` : '');
  return {
    [type]: filterString
  };
}
function getInlineHoverVariable(aplofilters) {
  const type = "--aplo-filter-hover-string";

  /* build drop shadow string */
  const shadow = () => {
    if (aplofilters.dsx || aplofilters.dsy) {
      const x = aplofilters.dsx ? aplofilters.dsx + "px " : '0 ';
      const y = aplofilters.dsy ? aplofilters.dsy + "px " : '0 ';
      const b = aplofilters.dsb ? aplofilters.dsb + "px " : '0 ';
      const c = `rgba(var(--aplo-fdsc), `;
      const o = aplofilters.dso ? `${aplofilters.dso / 100})` : `var(--aplo-fdso))`;
      return x + y + b + c + o;
    }
    return undefined;
  };
  const filterString = (aplofilters.invert !== undefined ? `invert(${aplofilters.invert}%) ` : '') + (aplofilters.hue !== undefined ? `hue-rotate(${aplofilters.hue}deg) ` : '') + (aplofilters.saturate !== undefined ? `saturate(${aplofilters.saturate}%) ` : '') + (aplofilters.sepia !== undefined ? `sepia(${aplofilters.sepia}%) ` : '') + (aplofilters.blur !== undefined ? `blur(${aplofilters.blur}px) ` : '') + (aplofilters.grayscale !== undefined ? `grayscale(${aplofilters.grayscale}%) ` : '') + (aplofilters.brightness !== undefined ? `brightness(${aplofilters.brightness}%) ` : '') + (aplofilters.contrast !== undefined ? `contrast(${aplofilters.contrast}%) ` : '') + (aplofilters.opacity !== undefined ? `opacity(${aplofilters.opacity}%) ` : '') + (shadow() ? `drop-shadow(${shadow()})` : '');

  /* the square brackets make the value of type the key */
  return {
    [type]: filterString
  };
}

/* CHECK FOR PROBLEMS SETTING FILTERS TO 0 */
/********************
 * 
 * Because I am checking for true and 0 of course evaluates as false, could check > 0
 * 
 * 
 * 
 * 
 * 
 */

function getInlineTransform(aplotransforms) {
  //if (filterHover !== "add") {
  //console.log("got into this function")
  const type = "--aplo-transform-string";
  //	console.log(aplotransforms);
  const transformString = (aplotransforms.rotate ? `rotate(${aplotransforms.rotate}deg) ` : '') + (aplotransforms.scale ? `scale(${aplotransforms.scale / 100}) ` : '') + (aplotransforms.translateY ? `translateY(${aplotransforms.translateY}px) ` : '') + (aplotransforms.translateX ? `translateX(${aplotransforms.translateX}px) ` : '');
  return {
    [type]: transformString
  };
}
function getInlineHoverTransform(aplotransforms) {
  const type = "--aplo-transform-hover-string";
  const transformString = (aplotransforms.rotate ? `rotate(${aplotransforms.rotate}deg) ` : '') + (aplotransforms.scale ? `scale(${aplotransforms.scale / 100}) ` : '') + (aplotransforms.translateY ? `translateY(${aplotransforms.translateY}px) ` : '') + (aplotransforms.translateX ? `translateX(${aplotransforms.translateX}px) ` : '');
  /* the square brackets make the value of type the key */
  return {
    [type]: transformString
  };
}
function getClasses(className, attributes) {
  let save = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;
  // add aploshow class in the editor
  const aploshow = !save ? 'aploshow' : '';
  const {
    aploeffect,
    aplotexture,
    aploshadow,
    aplocoveroverlay,
    aplopatterngroup,
    aplomask,
    backdropFilter,
    hasFilters,
    hasHoverFilters,
    galleryswitch,
    hasTransforms,
    hasHoverTransforms,
    haspullstyles,
    aploanimation
  } = attributes;
  const classes = classnames__WEBPACK_IMPORTED_MODULE_0___default()(className, aploeffect ? `aploanim ${aploeffect} ${aploshow}` : '', aplotexture ? `is-style-texture-${aplotexture}` : '', aploshadow ? `is-style-aplo-shadow-${aploshadow}` : '', aplocoveroverlay ? `is-style-aplo-coveroverlay` : '', aplopatterngroup ? `is-style-aplo-pg-${aplopatterngroup}` : '', aplomask ? `is-style-aplo-mask-${aplomask}` : '', backdropFilter ? 'aplo-bd-f' : '', hasFilters > 0 ? 'aplo-has-filters' : '', hasHoverFilters > 0 ? 'aplo-has-hover-filters' : '', galleryswitch ? 'aplo-gs' : '', hasTransforms > 0 ? 'aplo-has-transforms' : '', hasHoverTransforms > 0 ? 'aplo-has-hover-transforms' : '', haspullstyles > 0 ? 'aplo-has-pull-styles' : '', aploanimation ? `has-animation` : '');
  return classes;
}

/***/ }),

/***/ "../../../../../node_modules/classnames/index.js":
/*!*******************************************************!*\
  !*** ../../../../../node_modules/classnames/index.js ***!
  \*******************************************************/
/***/ (function(module, exports) {

var __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;/*!
	Copyright (c) 2018 Jed Watson.
	Licensed under the MIT License (MIT), see
	http://jedwatson.github.io/classnames
*/
/* global define */

(function () {
	'use strict';

	var hasOwn = {}.hasOwnProperty;
	var nativeCodeString = '[native code]';

	function classNames() {
		var classes = [];

		for (var i = 0; i < arguments.length; i++) {
			var arg = arguments[i];
			if (!arg) continue;

			var argType = typeof arg;

			if (argType === 'string' || argType === 'number') {
				classes.push(arg);
			} else if (Array.isArray(arg)) {
				if (arg.length) {
					var inner = classNames.apply(null, arg);
					if (inner) {
						classes.push(inner);
					}
				}
			} else if (argType === 'object') {
				if (arg.toString !== Object.prototype.toString && !arg.toString.toString().includes('[native code]')) {
					classes.push(arg.toString());
					continue;
				}

				for (var key in arg) {
					if (hasOwn.call(arg, key) && arg[key]) {
						classes.push(key);
					}
				}
			}
		}

		return classes.join(' ');
	}

	if ( true && module.exports) {
		classNames.default = classNames;
		module.exports = classNames;
	} else if (true) {
		// register as 'classnames', consistent with npm package name
		!(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_RESULT__ = (function () {
			return classNames;
		}).apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__),
		__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
	} else {}
}());


/***/ }),

/***/ "@wordpress/components":
/*!************************************!*\
  !*** external ["wp","components"] ***!
  \************************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["components"];

/***/ }),

/***/ "@wordpress/element":
/*!*********************************!*\
  !*** external ["wp","element"] ***!
  \*********************************/
/***/ (function(module) {

"use strict";
module.exports = window["wp"]["element"];

/***/ }),

/***/ "../../../../../node_modules/@babel/runtime/helpers/esm/extends.js":
/*!*************************************************************************!*\
  !*** ../../../../../node_modules/@babel/runtime/helpers/esm/extends.js ***!
  \*************************************************************************/
/***/ (function(__unused_webpack___webpack_module__, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": function() { return /* binding */ _extends; }
/* harmony export */ });
function _extends() {
  _extends = Object.assign ? Object.assign.bind() : function (target) {
    for (var i = 1; i < arguments.length; i++) {
      var source = arguments[i];
      for (var key in source) {
        if (Object.prototype.hasOwnProperty.call(source, key)) {
          target[key] = source[key];
        }
      }
    }
    return target;
  };
  return _extends.apply(this, arguments);
}

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
var __webpack_exports__ = {};
// This entry need to be wrapped in an IIFE because it need to be in strict mode.
!function() {
"use strict";
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/extends */ "../../../../../node_modules/@babel/runtime/helpers/esm/extends.js");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _files_registerHook__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../../files/registerHook */ "../files/registerHook.js");
/* harmony import */ var _files_filtersPanel__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../../files/filtersPanel */ "../files/filtersPanel.js");
/* harmony import */ var _files_transformsPanel__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../../files/transformsPanel */ "../files/transformsPanel.js");
/* harmony import */ var _files_entranceanimations__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ../../files/entranceanimations */ "../files/entranceanimations.js");
/* harmony import */ var _files_pullPanel__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ../../files/pullPanel */ "../files/pullPanel.js");
/* harmony import */ var _files_generalPanel__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ../../files/generalPanel */ "../files/generalPanel.js");
/* harmony import */ var _files_maskPanel__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ../../files/maskPanel */ "../files/maskPanel.js");
/* harmony import */ var _files_utils__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ../../files/utils */ "../files/utils.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! classnames */ "../../../../../node_modules/classnames/index.js");
/* harmony import */ var classnames__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(classnames__WEBPACK_IMPORTED_MODULE_10__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_11___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_11__);











/* eslint-disable react/jsx-props-no-spreading, react/prop-types */

//import colorconvert from 'color-convert';


// below here for testing imports

//import { AnglePickerControl } from '@wordpress/components';
//import { GradientPicker } from '@wordpress/components';






//import { useSelect } from '@wordpress/data';
//import { useSetting } from '@wordpress/block-editor';
// end testing imports

const {
  assign,
  merge
} = lodash;
const {
  __
} = wp.i18n;
const {
  addFilter
} = wp.hooks;
const {
  createHigherOrderComponent
} = wp.compose;
const {
  Fragment
} = wp.element;
const {
  InspectorControls
} = wp.blockEditor;
const {
  PanelBody,
  SelectControl,
  RadioControl
} = wp.components;
const blocksToModify = ['core/gallery', 'core/group', 'core/columns', 'core/column', 'core/cover', 'core/image', 'core/heading', 'core/paragraph', 'core/button', 'core/buttons', 'core/media-text', 'core/post-template', 'aploblocks/tabs', 'aploblocks/accordion', 'core/post-title', 'core/post-featured-image'];

/**
 * Add Effect attribute to Button block
 *
 * @param  {Object} settings Original block settings
 * @param  {string} name     Block name
 * @return {Object}          Filtered block settings
 */
function addAttributes(settings, name) {
  //console.log(name);
  // adds the attributes to the block
  return (0,_files_registerHook__WEBPACK_IMPORTED_MODULE_2__["default"])(settings, name, blocksToModify);
}
addFilter('blocks.registerBlockType', 'aploeffects/group/add-attributes', addAttributes);

/**
 * Add Effect control to Button block
 */
const addInspectorControl = createHigherOrderComponent(BlockEdit => {
  return props => {
    // probably remove these
    const {
      attributes: {
        aploeffect
      },
      attributes: {
        aploeffectease
      },
      attributes: {
        aploeffectdelay
      },
      attributes: {
        aploeffectduration
      },
      attributes: {
        aplotexture
      },
      attributes: {
        aploshadow
      },
      attributes: {
        aplocoveroverlay
      },
      attributes: {
        aplopatterngroup
      },
      attributes: {
        aplomask
      },
      attributes: {
        aplofilters
      },
      attributes: {
        aplofiltersHover
      },
      attributes: {
        backdropFilter
      },
      attributes: {
        hasFilters
      },
      attributes: {
        hasHoverFilters
      },
      attributes: {
        galleryswitch
      },
      attributes: {
        aplotransforms
      },
      attributes: {
        aplotransformsHover
      },
      attributes: {
        hasTransforms
      },
      attributes: {
        hasHoverTransforms
      },
      attributes: {
        aplohoverduration
      },
      attributes: {
        aplohoverease
      },
      /*attributes: {aploposition},*/
      attributes: {
        aplozindex
      },
      attributes: {
        aplomargintop
      },
      attributes: {
        aplomarginbottom
      },
      attributes: {
        aplomarginleft
      },
      attributes: {
        aplomarginright
      },
      /*attributes: {aplopositiontop},
      attributes: {aplopositionbottom},
      attributes: {aplopositionleft},
      attributes: {aplopositionright},*/
      attributes: {
        aploclip
      },
      attributes: {
        overflowhidden
      },
      attributes: {
        haspullstyles
      },
      attributes: {
        aploanimation
      },
      setAttributes,
      name
    } = props;
    if (blocksToModify.includes(name) === false) {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, props);
    }
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockEdit, props), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(InspectorControls, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_entranceanimations__WEBPACK_IMPORTED_MODULE_5__["default"], {
      props: props
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_transformsPanel__WEBPACK_IMPORTED_MODULE_4__["default"], {
      props: props
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_filtersPanel__WEBPACK_IMPORTED_MODULE_3__["default"], {
      props: props
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_maskPanel__WEBPACK_IMPORTED_MODULE_8__["default"], {
      props: props
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_pullPanel__WEBPACK_IMPORTED_MODULE_6__["default"], {
      props: props
    }), (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(_files_generalPanel__WEBPACK_IMPORTED_MODULE_7__["default"], {
      props: props
    })));
  };
}, 'withInspectorControl');
addFilter('editor.BlockEdit', 'aploeffects/group/add-inspector-controls', addInspectorControl);

/**
 * Add effect class to the block in the editor
 */
const addEffectClassEditor = createHigherOrderComponent(BlockListBlock => {
  return props => {
    const {
      attributes: {
        aploeffect
      },
      attributes: {
        aploeffectdelay
      },
      attributes: {
        aploeffectduration
      },
      attributes: {
        aplofilters
      },
      attributes: {
        aplofiltersHover
      },
      attributes: {
        backdropFilter
      },
      attributes: {
        hasFilters
      },
      attributes: {
        hasHoverFilters
      },
      attributes: {
        shadowInvert
      },
      attributes: {
        aplotransforms
      },
      attributes: {
        aplotransformsHover
      },
      attributes: {
        hasTransforms
      },
      attributes: {
        hasHoverTransforms
      },
      attributes: {
        aplohoverduration
      },
      className,
      name
    } = props;
    if (blocksToModify.includes(name) === false) {
      return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockListBlock, props);
    }
    const effectDuration = aploeffect && aploeffectduration ? {
      "--aplo-tedu": aploeffectduration + "ms"
    } : {};
    const effectDelay = aploeffect && aploeffectdelay ? {
      "--aplo-tede": aploeffectdelay + "ms"
    } : {};
    const inlineStyle = hasFilters > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineVariable)(aplofilters) : '';
    const inlineHoverStyle = hasHoverFilters > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineHoverVariable)(aplofiltersHover) : '';
    //const inlineTransform = getInlineTransform(props.attributes);
    const inlineTransformStyle = hasTransforms > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineTransform)(aplotransforms) : '';
    const inlineTransformHoverStyle = hasHoverTransforms > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineHoverTransform)(aplotransformsHover) : '';
    const hoverDuration = aplohoverduration ? {
      "--aplo-thdu": aplohoverduration + "ms"
    } : {};
    const inlineStylesGeneral = (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineStylesGeneral)(props.attributes);
    //console.log(inlineStylesGeneral);

    let wrapperProps = {
      ...props.wrapperProps
    };
    wrapperProps.style = {
      ...wrapperProps.style,
      ...inlineStyle,
      ...inlineHoverStyle,
      ...inlineTransformStyle,
      ...inlineTransformHoverStyle,
      ...hoverDuration,
      ...effectDuration,
      ...effectDelay,
      ...inlineStylesGeneral
    };
    wrapperProps.style = {
      ...wrapperProps.style
    };
    return (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(Fragment, null, (0,_wordpress_element__WEBPACK_IMPORTED_MODULE_1__.createElement)(BlockListBlock, (0,_babel_runtime_helpers_extends__WEBPACK_IMPORTED_MODULE_0__["default"])({}, props, {
      wrapperProps: wrapperProps,
      className: (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getClasses)(className, props.attributes, false)
    })), " ");
  };
}, 'withClientIdClassName');
addFilter('editor.BlockListBlock', 'aploeffects/group/add-editor-class', addEffectClassEditor);

/**
 * Add effect class to the block on the front end
 *
 * @param  {Object} props      Additional props applied to save element.
 * @param  {Object} block      Block type.
 * @param  {Object} attributes Current block attributes.
 * @return {Object}            Filtered props applied to save element.
 */
function addEffectClassFrontEnd(props, block, attributes) {
  if (blocksToModify.includes(block.name) === false) {
    return props;
  }
  const {
    className
  } = props;
  const {
    style
  } = props;
  const {
    aploeffect
  } = attributes;
  const {
    aploeffectdelay
  } = attributes;
  const {
    aploeffectduration
  } = attributes;
  const {
    aplofilters
  } = attributes;
  const {
    aplofiltersHover
  } = attributes;
  const {
    backdropFilter
  } = attributes;
  const {
    hasFilters
  } = attributes;
  const {
    hasHoverFilters
  } = attributes;
  const {
    shadowInvert
  } = attributes;
  const {
    hasTransforms
  } = attributes;
  const {
    hasHoverTransforms
  } = attributes;
  const {
    aplotransforms
  } = attributes;
  const {
    aplotransformsHover
  } = attributes;
  const {
    aplohoverduration
  } = attributes;
  const effectDuration = aploeffect && aploeffectduration ? {
    "--aplo-tedu": aploeffectduration + "ms"
  } : {};
  const effectDelay = aploeffect && aploeffectdelay ? {
    "--aplo-tede": aploeffectdelay + "ms"
  } : {};
  const inlineStyle = hasFilters > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineVariable)(aplofilters) : '';
  const inlineHoverStyle = hasHoverFilters > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineHoverVariable)(aplofiltersHover) : '';
  //const inlineTransform = getInlineTransform(attributes);
  const inlineTransformStyle = hasTransforms > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineTransform)(aplotransforms) : '';
  const inlineTransformHoverStyle = hasHoverTransforms > 0 ? (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineHoverTransform)(aplotransformsHover) : '';
  const hoverDuration = aplohoverduration ? {
    "--aplo-thdu": aplohoverduration + "ms"
  } : {};
  const inlineStylesGeneral = (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getInlineStylesGeneral)(attributes);
  return assign({}, props, {
    className: (0,_files_utils__WEBPACK_IMPORTED_MODULE_9__.getClasses)(className, attributes, true),
    style: {
      ...style,
      ...inlineStyle,
      ...inlineHoverStyle,
      ...inlineTransformStyle,
      ...inlineTransformHoverStyle,
      ...hoverDuration,
      ...effectDuration,
      ...effectDelay,
      ...inlineStylesGeneral
    }
  });
}
addFilter('blocks.getSaveContent.extraProps', 'aploeffects/group/add-front-end-class', addEffectClassFrontEnd);
}();
/******/ })()
;
//# sourceMappingURL=index.js.map