(function (window, document) {

    "use strict";

    /**
     * Define our ToastHelper constructor
     *
     * @constructor
     */
    window.ToastHelper = function () {
    };

    /**
     * Public/private methods for ToastHelper
     *
     * @type {{object}}
     */
    ToastHelper.prototype = {

        /**
         * Merge an object with another object, similar to jQuery.fn.extend
         *
         * @param source
         * @param properties
         * @returns {*}
         */
        extend: function (source, properties) {
            var property;

            for (property in properties) {
                if (properties && properties.hasOwnProperty(property)) {
                    source[property] = properties[property];
                }
            }

            return source;
        }

    };

    /**
     * Define our Toast constructor
     *
     * @param options
     * @constructor
     */
    window.Toast = function (options) {
        // Create an instance of our helper class
        this.helper = new ToastHelper();

        // The default options
        var defaults = {
            message: 'Woohoo, you rock!',
            duration: 7500,
            infinite: false,
            position: 'bottom right',
            isError: false
        };

        // Merge the defaults with the optional data
        if (options && typeof options === 'object') {
            this.options = this.helper.extend(defaults, options);
        } else {
            this.options = defaults;
        }

        // Define remaining class properties
        this.positionClass = this.options.position;
        this.id = 'toast-' + new Date().getTime();
        this.body = document.body;
        this.toast = null;
    };

    /**
     * Public/private methods for Toast
     *
     * @type {{object}}
     */
    Toast.prototype = {

        /**
         * Create and returns a toast object, consisting of the node and its id.
         *
         * @returns {Element}
         * @private
         */
        _createToast: function () {
            // Create toast container
            var toast = document.createElement('div');
            toast.className = 'toast-container ' + this.positionClass + (this.options.isError ? ' error' : '');
            toast.id = this.id;

            // Create toast message
            var toastMessage = document.createElement('div');
            toastMessage.className = 'toast-message';

            // Cross browser method to add text to the node, since innerText and textContent vary by browser.
            while (toastMessage.firstChild !== null) {
                toastMessage.removeChild(toastMessage.firstChild); // Remove all/any existing content
            }
            toastMessage.appendChild(document.createTextNode(this.options.message));

            // Add toast message to toast container
            toast.appendChild(toastMessage);

            return toast;
        },

        /**
         * Remove toast from DOM
         *
         * @returns {Toast}
         * @private
         */
        _remove: function () {
            var self = this;

            // Fade out
            self.toast.style.opacity = '0';

            // Wait a second and clean up the crumbs
            setTimeout(function () {
                self.body.removeChild(self.toast);
            }, 1000);

            return self;
        },

        /**
         * Add the toast to the DOM and set to be automatically removed.
         *
         * @returns {Toast}
         */
        show: function () {
            var self = this,
                toast = self._createToast();

            // Add toast to the body
            self.body.appendChild(toast);

            // Set the toast object
            self.toast = document.getElementById(toast.id);

            // Set toast to be automatically removed if applicable
            if (!self.options.infinite) {
                setTimeout(function () {
                    // Clean up the crumbs
                    self._remove();
                }, self.options.duration);
            }

            return self;
        },

        /**
         * Remove the toast from the DOM (cleaning up the crumbs)
         *
         * @returns {Toast}
         */
        close: function () {
            // Force clean up of crumbs (ignore this.options.infinite flag).
            this._remove();

            return this;
        }

    };

})(this, document);