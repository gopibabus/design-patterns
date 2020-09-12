# Anti-Patterns

> 🧠 Anti-patterns are those we don't want in our code.

> 🧠 Composer makes it really easy to manage third-party dependencies.

```json
{
   "autoload":{
      "psr-4":{
         "IcyApril\\ChapterOne":"src/"
      }
   },
   "require":{
      "IcyApril/my-private-repo":"dev-master"
   },
   "repositories":[
      {
         "type":"vcs",
         "url":"git@bitbucket.org:IcyApril/my-private-repo.git"
      }
   ]
}
```

> 🧠 Objects relating to physical objects should be instantiated, while those that don't should be abstract classes.

> 🧠 A **God object** is an object with either too many methods or too many properties; essentially, it's a class that knows too much or does too much. The most effective way of dealing with classes(God Objects) is to split them into separate classes manually.

```php
<?php
class God
{
  public function getTime(): int
  {
    return time();
  }

  public function getYesterdayDate(): string
  {
    return date("F j, Y", time() - 60 * 60 * 24);
  }

  public function getDaysInMonth(): int
  {
    return cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
  }

  public function isCacheWritable(): bool
  {
    return is_writable(CACHE_FILE);
  }

  public function writeToCache($data): bool
  {
    return (file_put_contents(CACHE_FILE, $data) !== false);
  }

  public function whatIsThisClass(): string
  {
    return "Pure technical debt in the form of a God Class.";
  }

}

```

Can be divided in to following 2 classes:

```php
<?php
class Watch
{
  public function getTime(): int
  {
    return time();
  }

  public function getYesterdayDate(): string
  {
    return date("F j, Y", time() - 60 * 60 * 24);
  }

  public function getDaysInMonth(): int
  {
    return cal_days_in_month(CAL_GREGORIAN, date('m'), date('Y'));
  }

}

```

```php
<?php
class CacheManager
{
  public function isCacheWritable(): bool
  {
    return is_writable(CACHE_FILE);
  }

  public function writeToCache($data): bool
  {
    return (file_put_contents(CACHE_FILE, $data) !== false);
  }

}

```

> 🧠 Store Application level configuration(ENVIRONMENT VARIABLES) in .env file or .yaml files.
