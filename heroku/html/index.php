<?php

set_time_limit(0);

echo '<pre>';

echo "Freenom 自动续期\n";

echo "开始执行\n\n";

passthru('php /app/run');

echo "\n\n执行完成";

echo '</pre>';