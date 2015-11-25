<?php
/*

Copyrights for code authored by Yahoo! Inc. is licensed under the following terms:
MIT License
Copyright (c) 2013-2015 Yahoo! Inc. All Rights Reserved.
Permission is hereby granted, free of charge, to any person obtaining a copy of this software and associated documentation files (the "Software"), to deal in the Software without restriction, including without limitation the rights to use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of the Software, and to permit persons to whom the Software is furnished to do so, subject to the following conditions:
The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.

Origin: https://github.com/zordius/lightncandy
*/

/**
 * file to keep LightnCandy flags
 *
 * @package    LightnCandy
 * @author     Zordius <zordius@yahoo-inc.com>
 */

namespace LightnCandy;

/**
 * LightnCandy class to keep flag consts
 */
class Flags
{
    // Compile time error handling flags
    const FLAG_ERROR_LOG = 1;
    const FLAG_ERROR_EXCEPTION = 2;

    // JavaScript compatibility
    const FLAG_JSTRUE = 8;
    const FLAG_JSOBJECT = 16;

    // Handlebars.js compatibility
    const FLAG_THIS = 32;
    const FLAG_PARENT = 128;
    const FLAG_HBESCAPE = 256;
    const FLAG_ADVARNAME = 512;
    const FLAG_SPACECTL = 1024;
    const FLAG_NAMEDARG = 2048;
    const FLAG_SPVARS = 4096;
    const FLAG_PREVENTINDENT = 131072;
    const FLAG_SLASH = 8388608;
    const FLAG_ELSE = 16777216;
    const FLAG_RAWBLOCK = 134217728;
    const FLAG_HANDLEBARSLAMBDA = 268435456;
    const FLAG_PARTIALNEWCONTEXT = 536870912;

    // PHP behavior flags
    const FLAG_STANDALONEPHP = 4;
    const FLAG_EXTHELPER = 8192;
    const FLAG_ECHO = 16384;
    const FLAG_PROPERTY = 32768;
    const FLAG_METHOD = 65536;
    const FLAG_RUNTIMEPARTIAL = 1048576;
    const FLAG_BARE = 33554432;
    const FLAG_NOESCAPE = 67108864;

    // Mustache compatibility
    const FLAG_MUSTACHELOOKUP = 262144;
    const FLAG_ERROR_SKIPPARTIAL = 4194304;
    const FLAG_MUSTACHELAMBDA = 2097152;
    const FLAG_NOHBHELPERS = 64;

    // Template rendering time debug flags
    const FLAG_RENDER_DEBUG = 524288;

    // alias flags
    const FLAG_BESTPERFORMANCE = 16384; // FLAG_ECHO
    const FLAG_JS = 24; // FLAG_JSTRUE + FLAG_JSOBJECT
    const FLAG_INSTANCE = 98304; // FLAG_PROPERTY + FLAG_METHOD
    const FLAG_MUSTACHE = 7602264; // FLAG_ERROR_SKIPPARTIAL + FLAG_MUSTACHELOOKUP + FLAG_MUSTACHELAMBDA + FLAG_NOHBHELPERS + FLAG_RUNTIMEPARTIAL + FLAG_JS
    const FLAG_HANDLEBARS = 159391648; // FLAG_THIS + FLAG_PARENT + FLAG_HBESCAPE + FLAG_ADVARNAME + FLAG_SPACECTL + FLAG_NAMEDARG + FLAG_SPVARS + FLAG_SLASH + FLAG_ELSE + FLAG_RAWBLOCK
    const FLAG_HANDLEBARSJS = 159391672; // FLAG_JS + FLAG_HANDLEBARS
    const FLAG_HANDLEBARSJS_FULL = 429236152; // FLAG_HANDLEBARSJS + FLAG_INSTANCE + FLAG_RUNTIMEPARTIAL + FLAG_MUSTACHELOOKUP
}

