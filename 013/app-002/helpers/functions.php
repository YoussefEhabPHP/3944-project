<?php
function dump($item)
{
    $id = uniqid('dump-');

    echo '
    <style>
        .php-dump {
            margin: 20px 0;
            border-radius: 14px;
            overflow: hidden;
            background: #0f172a;
            color: #e2e8f0;
            font-family: Consolas, Monaco, monospace;
            box-shadow: 0 8px 25px rgba(15, 23, 42, .18);
            border: 1px solid #334155;
            max-width: 100%;
            box-sizing: border-box;
        }

        .php-dump * {
            box-sizing: border-box;
        }

        .php-dump-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            gap: 10px;
            padding: 12px 16px;
            background: #1e293b;
            border-bottom: 1px solid #334155;
        }

        .php-dump-title {
            display: flex;
            align-items: center;
            gap: 10px;
            font: 600 13px Arial, sans-serif;
            color: #f8fafc;
        }

        .php-dump-dots {
            display: flex;
            gap: 5px;
        }

        .php-dump-dots span {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            display: inline-block;
        }

        .php-dump-badge {
            background: #334155;
            color: #7dd3fc;
            padding: 5px 9px;
            border-radius: 6px;
            font-size: 11px;
            overflow-wrap: anywhere;
        }

        .php-dump-content {
            padding: 18px;
            margin: 0;
            overflow-x: auto;
            max-width: 100%;
            font-size: 13px;
            line-height: 1.8;
            white-space: pre;
            overflow-wrap: normal;
            tab-size: 4;
            -webkit-overflow-scrolling: touch;
        }

        .php-dump-content::-webkit-scrollbar {
            height: 7px;
        }

        .php-dump-content::-webkit-scrollbar-thumb {
            background: #475569;
            border-radius: 10px;
        }

        .php-dump-footer {
            padding: 9px 16px;
            border-top: 1px solid #334155;
            color: #94a3b8;
            font: 11px Arial, sans-serif;
            display: flex;
            justify-content: space-between;
            gap: 8px;
            flex-wrap: wrap;
        }

        @media (max-width: 480px) {
            .php-dump {
                margin: 14px 0;
                border-radius: 10px;
            }

            .php-dump-content {
                padding: 13px;
                font-size: 12px;
            }

            .php-dump-header {
                padding: 10px 12px;
            }
        }
    </style>';

    echo '<div class="php-dump">';

    echo '<div class="php-dump-header">';

    echo '<div class="php-dump-title">
            <span class="php-dump-dots">
                <span style="background:#fb7185"></span>
                <span style="background:#fbbf24"></span>
                <span style="background:#4ade80"></span>
            </span>
            PHP Debugger
          </div>';

    echo '<span class="php-dump-badge">'
        . htmlspecialchars(get_debug_type($item), ENT_QUOTES, 'UTF-8')
        . '</span>';

    echo '</div>';

    echo '<pre class="php-dump-content">';

    var_dump($item);

    echo '</pre>';

    echo '<div class="php-dump-footer">
            <span>PHP Development Tools</span>
            <span>DEBUG MODE</span>
          </div>';

    echo '</div>';
}

