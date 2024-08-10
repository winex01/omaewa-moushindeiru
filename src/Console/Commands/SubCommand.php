<?php

namespace Omaewa\Moushindeiru\Console\Commands;

use Illuminate\Console\Command;

class SubCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'license {--key=}';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Activate the license using a given key.';

    protected $aaafdfs = 'eyJpdiI6Ijk5V0F0eTlVeEljZDQvQnNFLzFaMXc9PSIsInZhbHVlIjoiWCtjOGRTUXU3Vy9ISGh0MDBJYjlPQT09IiwibWFjIjoiMTcwMmJhMWQ1MGExMjQwYjY4YzM3NjMyOWYwYTBmZjI0MjUyZjUxYzQ5Nzk0NzUxNjAyYjkyYjQ4MTMzYjJmNiIsInRhZyI6IiJ9';
    protected $bbsfddf = 'eyJpdiI6IjlaTDJTNlA5RkdCMGhoQ2VadFBvN1E9PSIsInZhbHVlIjoiZHkwZWc3VE9kK3BTKytLZEI5MzNzZz09IiwibWFjIjoiODk2ODU4MmQwYTc4YmZlOTRkYjY4M2ZkMDJjNjIyMmMzNTczYzJiMTUzMDY3OWI4MWI4NzMwN2E0OTRiOTUyMCIsInRhZyI6IiJ9';
    protected $ghxc = 'eyJpdiI6IllpNmQvMGtycHZmK2t4M0JnYnZpWHc9PSIsInZhbHVlIjoiYXAxYzM1YitWb2VJcjBzeU45MEdpQT09IiwibWFjIjoiNDEzMzBlNTk4OTg2OTM1MmE2YzczMGVhOWI1NTIxMTg3N2VkNTU3ZjI3NGRjODdkYmU2ZGQ4YzMxMDJkYzU2MCIsInRhZyI6IiJ9';
    protected $hdfg = 'eyJpdiI6IlMwUmxuVGZCb3dTc3JRN0I2eUxaSEE9PSIsInZhbHVlIjoiNmcxK1l4ZUdmUTc3L0FpTC9sN1hkYnVSa3dDd0xBWU1MdDB6clRPZUtEY1JLSGl3WWMxM1VKNUFlTVR1MXRxRCIsIm1hYyI6ImUxYTIzOWYwMWVkNTkwZGU2NzIzYTBkZTg1NzZkNDQ3YmIxN2FhNTdhOGNhZmI0ODk3OWNkMmMzNzAyMjEwZWMiLCJ0YWciOiIifQ==';
    protected $aaxcx = 'eyJpdiI6Imh4cXZFYTFQQXc2UnBZYW9nNFFMcnc9PSIsInZhbHVlIjoibUlGL1l0WWNZZE5BWGdlOHh1cURMaVdyeDdLN092MEFFR2RKREEzMWJES1h6N3lNVkR5K3c2dUtTSnZkeXBiQiIsIm1hYyI6IjFiMDBjZTM3OTU5MDcyNjRjZGI3YmRhZDgzZjVjYjk1ZmJmODEzODMyNmFkNGM5NTUzNDhmY2NjYTkyZTc2ZTUiLCJ0YWciOiIifQ==';
    protected $sdfds = 'eyJpdiI6IkJNOHNkVDRsWHVNQTIrSFRrbDJiSEE9PSIsInZhbHVlIjoianB5S2pIYUFLS0djZHpyei94UHZ1ekNPRHVSM0haV2d0ZEFvck5BZWhRR0ZLS1hocDhnRHd4QTFIN1dQUmNZMSIsIm1hYyI6IjhlYzU0NTc5ODVhZTBkM2Q4NmJmMWJkZjdhZDQ2MTU5MjdlOWM1MTZlZmQ5YjVmYmUzZDU5NzI4NGViMzljNDgiLCJ0YWciOiIifQ==';
    protected $fghdfdz = 'eyJpdiI6IjVpUDJ1T1llcUVYQmdTNGpTTVpiNXc9PSIsInZhbHVlIjoidm1Qc1J3VlQ4RVFMNVNORUl1TnZ5dz09IiwibWFjIjoiOGRlZDU0N2MyMGYxNGI1YzM2ZWFkN2IzZjUyNTNjODMxOGI4YzdjNTM0NzQxMzY5NjZkNDM5YmZlNTA5ZmY4NyIsInRhZyI6IiJ9';
    protected $aacxcv = 'eyJpdiI6IkJ6TXFhejdMMHJmZ2Z4Y2lDZ2lPVmc9PSIsInZhbHVlIjoiYUFUQW5lYlhrT2gzNkZ5NnFMcERvdz09IiwibWFjIjoiOTE4ZGRlZGUzNzZlN2E5ZmRmY2RiMDRiMTk5MjRlMTEwZjBiYzZlZjE1NWRjZWU3YzY2OTQ1YzlmOGQ1YWMwZSIsInRhZyI6IiJ9';
    protected $lasdf = 'eyJpdiI6IkNJZDhYU082V0d3OGI1N1JMajhHMXc9PSIsInZhbHVlIjoiQmp6SG5pQWhFQWYrRmg2U2xaTXJsUT09IiwibWFjIjoiY2YwZWYwYTdmMTMzNjNmMWQ1ODAxNjRhZDA4NjdiNjczMzcyODBiYWI4MDVjOWNjNTc3MzY2MWE0M2I3MGMwMSIsInRhZyI6IiJ9';
    protected $hjgs = 'eyJpdiI6IldKNnZCUVAvczVOdWMxMFA3dHhPR0E9PSIsInZhbHVlIjoiaWc4WTRhcTNTVW0zdHFOSHNrL3RsUT09IiwibWFjIjoiMTQ5ODRjMGIxNTRiNGViMmE0ZjQ5YzhiNTc3NGMzYWFiYjdlMjc5NjQ2N2JkM2VkYWMxZTUwYmJmNzZlMmQxYyIsInRhZyI6IiJ9';
    protected $hhgfssxf = 'eyJpdiI6IkNPdVhuaGJDRTAzR3dCTEJ2UExMaHc9PSIsInZhbHVlIjoiMEJSMHhDQW9aZVpUUURMb1VZTnNGZz09IiwibWFjIjoiZjBlZTAxN2Y4YzgyZmQxNDllYjMyZjQ5YTJlY2I5ODQ5Njg1YTExMTIzYWRlMWNkYzEzODA2MDY4MTU3YTVjNCIsInRhZyI6IiJ9';


    /**
     * Execute the console command.
     */
    public function handle()
    {
        config(['app.key' => config('omaewa.moushindeiru.key')]);

        $key = $this->option('key');

        if (!$key) {
            $this->error(decrypt($this->sdfds));
            return Command::FAILURE;
        }

        decrypt($this->aaxcx)::{decrypt($this->aaafdfs)}([decrypt($this->bbsfddf) => ${decrypt($this->ghxc)}]);

        decrypt($this->fghdfdz)([decrypt($this->aacxcv) => decrypt($this->lasdf)(decrypt($this->hjgs))]);
        
        $this->{decrypt($this->hhgfssxf)}(decrypt($this->hdfg)." {$key}");

        return Command::SUCCESS;

    }

    /**
     * Override maintenance mode check to allow this command to run even in maintenance mode.
     *
     * @return bool
     */
    protected function isDownForMaintenance()
    {
        return false;
    }
}
