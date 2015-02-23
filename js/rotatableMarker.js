// Thanks to manleyjster
// https://github.com/manleyjster/Leaflet.Illustrate/tree/master/src/extends-leaflet
if (L.DomUtil) {
    L.DomUtil.getRotateString = function(angle, units) {
        var is3d = L.Browser.webkit3d,
            open = 'rotate' + (is3d ? '3d' : '') + '(',
            rotateString = (is3d ? '0, 0, 1, ' : '') + angle + units;
            
        return open + rotateString + ')';
    };
}
if (L.DomUtil) {
    L.DomUtil.setTransform = function (el, point, angle, disable3D) {

        // jshint camelcase: false
        el._leaflet_pos = point;

        if (!disable3D && L.Browser.any3d) {
            el.style[L.DomUtil.TRANSFORM] = L.DomUtil.getTranslateString(point);
            el.style[L.DomUtil.TRANSFORM] = el.style[L.DomUtil.TRANSFORM] + " " + L.DomUtil.getRotateString(angle, 'rad');
        } else {
            // if 3d is disabled, then there is no rotation at all
            el.style.left = point.x + 'px';
            el.style.top = point.y + 'px';
        }
    };
}
L.RotatableMarker = L.Marker.extend({

    options: {
        rotation: 0
    },

    initialize: function(latlng, options) {
        L.Marker.prototype.initialize.call(this, latlng, options);
        this.setRotation(this.options.rotation);
    },

    setRotation: function(theta) {
        this._rotation = theta;
        
        this.update();
        this.fire('rotate', { rotation: this._rotation });

        return this;
    },

    getRotation: function() {
        return this._rotation;
    },

    _setPos: function(pos) {
        //debugger
        L.DomUtil.setTransform(this._icon, pos, this._rotation);

        if (this._shadow) {
            L.DomUtil.setTransform(this._shadow, pos, this._rotation);
        }

        this._zIndex = pos.y + this.options.zIndexOffset;

        this._resetZIndex();
    }
});

L.rotatableMarker = function(latlng, options) {
    return new L.RotatableMarker(latlng, options);
};