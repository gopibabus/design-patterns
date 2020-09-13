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

> 🧠 Store Application level configuration(ENVIRONMENT VARIABLES) in **.env file or .yaml files**.

> 🧠 Reasons why we should be avoided using **Singletons**

* Singletons are inherently **tightly coupled** meaning they are difficult to test, for example using unit tests. They even maintain their state throughout the life cycle of the application.
* Singletons violate the **Single Responsibility Principle** by controlling their own creation and life cycle.
* Fundamentally, it results in you hiding the dependencies of your application in a **global** instance. You can no longer effectively follow your dependencies around your code as you can't follow where they are injected as function arguments. They make it ineffective to find the dependency chain should you need to analyze it.

> 🧠 Your database isn't a message queuing system(RabbitMQ). You don't use database to schedule jobs or queue up tasks to be completed. If you need something to do that, use a queuing system(RabbitMQ). Your database(MySQL) is to store data.

> 🧠 Instead of using auto-increment database IDs, try to use **UUID** function to generate IDs.

> 🧠 If you have to run a service indefinitely, you should treat that task as daemon. So you should use tool like **Monit** tool instead of using **cronjob** that never ends. A **cronjob** is a scheduled job that will run at a predetermined time. It's not something that operates services for you. Not only is this messy from an architectural perspective, but it scales horribly and becomes terrible to monitor. **Monit** is a tool in Linux systems that allows you to imitate services.

> 🧠 Moving issues from the software architecture layer to the infrastructure layer has its advantages. Suppose if you need to proxy a request for a particular URL endpoint off to another server. I believe this is best done at the web server level as opposed to writing a PHP proxy script.

```html
<VirtualHost *:80>
  ServerName test.local
  DocumentRoot /var/www/html/
  ProxyPass /api http://api.local
  ProxyPassReverse /api http://api.local
</VirtualHost>
```

This is far easier to maintain than thousands of lines of code in a PHP library that imitates something that is already available in the ProxyPass Apache module.

> Interface Bloat is, as the name suggests, is where an Interface is excessively bloated. An interface can be so bloated that it becomes practically impossible for a class to be implemented any other way.

Example of Bad Interface

```php
<?php

namespace Pheanstalk;

interface PheanstalkInterface
{
  const DEFAULT_PORT = 11300;
  const DEFAULT_DELAY = 0;
  const DEFAULT_PRIORITY = 1024;
  const DEFAULT_TTR = 60;
  const DEFAULT_TUBE = 'default';
  public function setConnection(Connection $connection);
  public function getConnection();
  public function bury($job, $priority = self::DEFAULT_PRIORITY);
  public function delete($job);
  public function ignore($tube);
  public function kick($max);
  public function kickJob($job);
  public function listTubes();
  public function listTubesWatched($askServer = false);
  public function listTubeUsed($askServer = false);
  public function pauseTube($tube, $delay);
  public function resumeTube($tube);
  public function peek($jobId);
  public function peekReady($tube = null);
  public function peekDelayed($tube = null);
  public function peekBuried($tube = null);
  public function put($data, $priority = self::DEFAULT_PRIORITY, $delay =
  self::DEFAULT_DELAY, $ttr = self::DEFAULT_TTR);
  public function putInTube($tube, $data, $priority =
  self::DEFAULT_PRIORITY, $delay = self::DEFAULT_DELAY, $ttr = self::DEFAULT_TTR);
  public function release($job, $priority = self::DEFAULT_PRIORITY, $delay = self::DEFAULT_DELAY);
  public function reserve($timeout = null);
  public function reserveFromTube($tube, $timeout = null);
  public function statsJob($job);
  public function statsTube($tube);
  public function stats();
  public function touch($job);
  public function useTube($tube);
  public function watch($tube);
  public function watchOnly($tube);
}

```
Interfaces should be lightweight and considered a way of guaranteeing that when something is queried that it is definitely there.

> 🧠 Error suppression operators(@) should be avoided unless strictly necessary in the interest of making debugging far easier for developers.

> 🧠 **phpunit.xml** file should include in our VCS. So that PHPUnit knows where the **tests** are, but also where the **Composer autoloader** is.

```xml
<?xml version="1.0" encoding="UTF-8"?>
<phpunit colors="true" bootstrap="./vendor/autoload.php">
  <testsuites>
    <testsuite name="Application Test Suite">
      <directory>./tests/</directory>
    </testsuite>
  </testsuites>
</phpunit>
```

> 🧠 Splitting your monolith into small independent loosely coupled services is a great way to reduce technical debt.

> 🧠 Using container technology such as Docker can allow you to better perform rapid application deployments, allowing you to deploy faster while also increasing portability and simplifying maintenance.

> 🧠 Over-analyzing a problem and seeking a perfect solution upfront just does not work; programmers should seek to refine their solution, not come up with the refined solution up front.

> 🧠 Writing clean and readable code is your first priority; then you can use some great profiling tools to determine where your bottlenecks are. **XDebug and New Relic** are just some of the tools that are good at this.

> 🧠 Use tools like **SensioLabs Insight tool** to evaluate technical debt within various projects.

> 🧠 Long methods are an indicator of code smell; they refer to a symptom in the code that may have its origins in a deeper problem.

Here's a list of things that we should remember:

* Plan before you start coding
* Make comments, and add a comment where the purpose of your code isn't immediately apparent
* Make sure your code has structure
* Try to avoid putting too much code in one method
* Use DocBlocking
* Use common sense approaches to PHP
