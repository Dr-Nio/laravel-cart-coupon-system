<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'MacBook Pro',
            'slug' => 'macbook-pro',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '300',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'Laptop 1',
            'slug' => 'laptop-p1',
            'details' => '13 inch, 200 GB, 4GB RAM',
            'price' => '50',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'Laptop 2',
            'slug' => 'laptop-2',
            'details' => '15 inch, 500 GB, 8GB RAM',
            'price' => '150',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 1',
            'slug' => 'macbook-pro-1',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '61.5',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 2',
            'slug' => 'macbook-pro-2',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '61.5',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 3',
            'slug' => 'macbook-pro-3',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '300',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 4',
            'slug' => 'macbook-pro-4',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '100',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 11',
            'slug' => 'macbook-pro-11',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '70',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 5',
            'slug' => 'macbook-pro-5',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '45.77',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 6',
            'slug' => 'macbook-pro-6',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '70',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 12',
            'slug' => 'macbook-pro-12',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '90',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 7',
            'slug' => 'macbook-pro-7',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '99.99',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 8',
            'slug' => 'macbook-pro-8',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '170',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 9',
            'slug' => 'macbook-pro-9',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '230',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);

        Product::create([
            'name' => 'MacBook 10',
            'slug' => 'macbook-pro-10',
            'details' => '17 inch, 1TB SSD, 32GB RAM',
            'price' => '500',
            'description' => 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. ',
        ]);
    }
}
