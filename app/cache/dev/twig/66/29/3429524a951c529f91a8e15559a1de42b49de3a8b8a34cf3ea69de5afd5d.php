<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_66293429524a951c529f91a8e15559a1de42b49de3a8b8a34cf3ea69de5afd5d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  42 => 12,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  681 => 466,  676 => 56,  671 => 28,  664 => 467,  662 => 466,  640 => 447,  607 => 417,  603 => 416,  599 => 415,  595 => 414,  591 => 413,  587 => 412,  583 => 411,  579 => 410,  575 => 409,  571 => 408,  567 => 407,  563 => 406,  559 => 405,  555 => 404,  551 => 403,  547 => 402,  543 => 401,  539 => 400,  535 => 399,  531 => 398,  527 => 397,  523 => 396,  519 => 395,  515 => 394,  511 => 393,  507 => 392,  503 => 391,  499 => 390,  495 => 389,  491 => 388,  437 => 336,  376 => 277,  315 => 218,  246 => 151,  186 => 93,  183 => 89,  168 => 77,  146 => 57,  144 => 56,  139 => 54,  133 => 51,  123 => 44,  117 => 41,  106 => 32,  101 => 29,  99 => 28,  95 => 27,  91 => 35,  87 => 25,  83 => 30,  79 => 29,  75 => 28,  71 => 21,  67 => 20,  63 => 19,  59 => 18,  55 => 17,  51 => 16,  47 => 15,  43 => 14,  39 => 13,  32 => 6,  22 => 1,);
    }
}
