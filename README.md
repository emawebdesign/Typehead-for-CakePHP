# Typehead-for-CakePHP
Typehead.js for CakePHP. A CakePHP plugin.

<h2>Requirements</h2>

HTTP Server. For example: Apache.
PHP 5.2.8 or greater.
CakePHP 2.5.1+

<h2>Dependencies</h2>

https://twitter.github.io/typeahead.js/

<h2>Installation</h2>

- upload Typehead folders (Config, View and webroot) in the /app/Plugin/Typehead/ folder
- activate the plugin in /app/Config/bootstrap.php

```php
CakePlugin::loadAll(array(
    'Typehead' => array('bootstrap' => false, 'routes' => true)
));
```

<h3>Usage</h3>

- add .typeahead class on input text and include jquery

- load helper

```php
public $helpers = array('Typehead.requests');
```

- load typehead in your view

```php
<?php echo $this->Requests->index(); ?>
```

<h2>License</h2>

MIT LICENSE

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.

