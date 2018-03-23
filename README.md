# RSS

RSS builder for Laravel 5

## Installation

```json
composer require ahmed-aliraqi/laravel-rss
```

## Usage

Returns the feed

```php
Route::get('/', function()
{
	$feed = Rss::feed('2.0', 'UTF-8');
	$feed->channel([
	    'title'       => "Channel's title",
	    'description' => "Channel's description",
	    'link'        => "http://www.test.com/"
    ]);
    
	for ($i=1; $i<=5; $i++) {
		$feed->item([
		    'title' => 'Item '.$i,
		    'description|cdata' => 'Description '.$i,
		    'link' => 'http://www.test.com/article-'.$i
	    ]);
	}

	return response($feed, 200)->header('Content-Type', 'text/xml');
});
```

Save the feed

```php
Route::get('/', function()
{
	$feed = Rss::feed('2.0', 'UTF-8');
	$feed->channel([
	    'title'       => "Channel's title",
	    'description' => "Channel's description",
	    'link'        => "http://www.test.com/"
    ]);
    
	for ($i=1; $i<=5; $i++) {
		$feed->item([
		    'title' => 'Item '.$i,
		    'description|cdata' => 'Description '.$i,
		    'link' => 'http://www.test.com/article-'.$i
	    ]);
	}

	$feed->save('test.xml');
});
```
