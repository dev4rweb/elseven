/**
 * The internal dependencies.
 */
import { autoload } from 'wp-content/themes/elseven/includes/carbon-fields/vendor/htmlburger/carbon-fields/assets/js/lib/helpers';

autoload(require.context('./lib', true, /\.js$/));
autoload(require.context('./containers', true, /\.js$/));
autoload(require.context('./fields', true, /\.js$/));
autoload(require.context('./sidebars', true, /\.js$/));
autoload(require.context('./store', true, /\.js$/));
