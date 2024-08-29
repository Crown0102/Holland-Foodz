<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SalesPoint;

class SalesPointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* id = 1 */
        SalesPoint::create([
            'title' => 'Bio Journaal',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Den Haag',
            'owner' => 'Berta Jansen',
            'facebook' => 'https://www.facebook.com/bertajansen',
            'twitter' => 'https://www.twitter.com/bertajansen',
            'pinterest' => 'https://www.pinterest.com/bertajansen',
            'instagram' => 'https://www.instagram.com/bertajansen'
        ]);

        /* id = 2 */
        SalesPoint::create([
            'title' => 'Levens Middelen',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Utrecht',
            'owner' => 'Maria Haan',
            'facebook' => 'https://www.facebook.com/mariahaan',
            'twitter' => 'https://www.twitter.com/mariahaan',
            'pinterest' => 'https://www.pinterest.com/mariahaan',
            'instagram' => 'https://www.instagram.com/mariahaan'
        ]);

        /* id = 3 */
        SalesPoint::create([
            'title' => 'Five Star',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Rotterdam',
            'owner' => 'Finn Groot',
            'facebook' => 'https://www.facebook.com/finngroot',
            'twitter' => 'https://www.twitter.com/finngroot',
            'pinterest' => 'https://www.pinterest.com/finngroot',
            'instagram' => 'https://www.instagram.com/finngroot'
        ]);

        /* id = 4 */
        SalesPoint::create([
            'title' => 'Einzel Handel',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Breda',
            'owner' => 'Anne Klein',
            'facebook' => 'https://www.facebook.com/anneklein',
            'twitter' => 'https://www.twitter.com/anneklein',
            'pinterest' => 'https://www.pinterest.com/anneklein',
            'instagram' => 'https://www.instagram.com/anneklein'
        ]);

        /* id = 5*/
        SalesPoint::create([
            'title' => 'Travel Addicts',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Eindhoven',
            'owner' => 'Mandy Lange',
            'facebook' => 'https://www.facebook.com/mandylange',
            'twitter' => 'https://www.twitter.com/mandylange',
            'pinterest' => 'https://www.pinterest.com/mandylange',
            'instagram' => 'https://www.instagram.com/mandylange'
        ]);

        /* id = 6 */
        SalesPoint::create([
            'title' => 'Alle Holland',
            'description' => 'Donec sed erat ut magna suscipit mattis. Aliquam erat volutpat. Morbi in orci risus. Donec pretium fringilla blandit. Etiam ut accumsan leo. Aliquam id mi quam. 
                                Vivamus dictum ut erat nec congue. Etiam facilisis lacus ut arcu vulputate, non pellentesque sem convallis. Proin tempus sapien nisl, nec varius risus tristique a. 
                                Etiam ligula lacus, ultricies at cursus id, fringilla nec nulla. Fusce pretium laoreet diam a mollis. In finibus purus sed tortor fringilla, eu luctus lorem sodales.
                                Ut dignissim ante ac augue vulputate tristique. Mauris venenatis tincidunt nibh, sit amet fringilla augue malesuada a. Mauris a nunc congue, viverra lectus sed, imperdiet quantam. 
                                Aenean tempor sem sed lorem ultricies lacinia. Sed sit amet tortor nibh. Donec condimentum posuere nunc, et hendrerit sapien dictum ut. Aliquam congue non purus eu suscipit. 
                                Integer eu dui tortor. Donec ut dolor vitae ipsum ultrices semper. Morbi imperdiet dictum urna nec blandit. Curabitur interdum diam ut porta vulputate.',
            'position' => 'Maastricht',
            'owner' => 'James Muis',
            'facebook' => 'https://www.facebook.com/jamesmuis',
            'twitter' => 'https://www.twitter.com/jamesmuis',
            'pinterest' => 'https://www.pinterest.com/jamesmuis',
            'instagram' => 'https://www.instagram.com/jamesmuis'
        ]);

    }
}
