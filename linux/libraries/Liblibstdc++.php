<?php
/**
 * Copyright (c) 2022 Yun Dou <dixyes@gmail.com>
 *
 * lwmbs is licensed under Mulan PSL v2. You can use this
 * software according to the terms and conditions of the
 * Mulan PSL v2. You may obtain a copy of Mulan PSL v2 at:
 *
 * http://license.coscl.org.cn/MulanPSL2
 *
 * THIS SOFTWARE IS PROVIDED ON AN "AS IS" BASIS,
 * WITHOUT WARRANTIES OF ANY KIND, EITHER EXPRESS OR IMPLIED,
 * INCLUDING BUT NOT LIMITED TO NON-INFRINGEMENT,
 * MERCHANTABILITY OR FIT FOR A PARTICULAR PURPOSE.
 *
 * See the Mulan PSL v2 for more details.
 */

declare(strict_types=1);

// 类名严格匹配报错中的 "Liblibstdc++"
class Liblibstdc++ extends Library
{
    // 适配 Linux/Unix 环境的 Trait（Windows 用 WindowsLibraryTrait）
    use UnixLibraryTrait;
    
    // 库名
    protected string $name = 'libstdc++';
    
    // libstdc++ 静态库名（根据系统实际情况调整）
    protected array $staticLibs = [
        'libstdc++.a',
    ];
    
    // 系统库无需指定头文件，留空即可
    protected array $headers = [];
    
    // libstdc++ 无额外依赖，留空
    protected array $depNames = [];

    /**
     * 构建逻辑：系统库无需编译，仅日志提示
     */
    protected function build(): void
    {
        Log::i("{$this->name} is a system library (libstdc++), no need to build");
    }
}
