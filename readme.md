# FantasyDataAPI DataBundle for Symfony 2

This is a Symfony2 Bundle that implements V2 Of FantasyData.coms API for NFL.
If you're a customer of FantasyData, and are interested in contributing back to this project, feel free to read the
[Contributing Documentation](doc/CONTRIBUTING.md), we'd love to have you.

## Requirements
This module requires the use of Composer, you will find additional software requirements in the packaged composer.json file.

In addition, you will need to obtain an api key from the [FantasyData Portal](http://fantasydata.com/). The service offers
a Free Trial as well as a Developer subscription for those getting started.

## What Does The Bundle Do???

The Bundle Wraps the FantasyDataAPI It Contains All the Entitys Needed to store the data from the FantasyDataAPI locally.
All the Api calls are avaliable as console commands.

In addition it can add the commands as chrontasks to execute commands at defined intervals.

For a List of commands avaliable view the [Console Commands](doc/ConsoleCommands.md)

### Installing the library with Composer
To easily include the FantasyDataAPI into your project, you should be using [Composer](http://getcomposer.org).
To do so, add lines similar to the following to your project's composer.json file.

```json
"require": {
    "php": ">=5.4",
    "DizzyBHigh/FPDataBundle" : "1.*",
},

"repositories": [ {
    "type": "vcs",
    "url": "https://github.com/DizzyBHigh/FPDataBundle"
}],

```
## Open Source
This project is built on top of a number of open source projects, but I wanted to specifically call out
and thank the [Guzzle](https://github.com/guzzle/guzzle) project. Guzzle is a PHP HTTP client and
webservice framework for building RESTful web service clients.

## Documentation
All documentation can be found in the [doc](doc) folder.


# LICENSE
This module is licensed using the BSD 2-Clause License:

```
Copyright (c) 2015 Dizzy B High @ Base5 Designs

   Licensed under the Apache License, Version 2.0 (the "License");
   you may not use this file except in compliance with the License.
   You may obtain a copy of the License at

       http://www.apache.org/licenses/LICENSE-2.0

   Unless required by applicable law or agreed to in writing, software
   distributed under the License is distributed on an "AS IS" BASIS,
   WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
   See the License for the specific language governing permissions and
   limitations under the License.
```