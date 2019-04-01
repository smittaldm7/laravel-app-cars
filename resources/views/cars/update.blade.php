public function update(Request $request, $id)
{
      $request->validate([
        'share_name'=>'required',
        'share_price'=> 'required|integer',
        'share_qty' => 'required|integer'
      ]);

      $share = Share::find($id);
      $share->share_name = $request->get('share_name');
      $share->share_price = $request->get('share_price');
      $share->share_qty = $request->get('share_qty');
      $share->save();

      return redirect('/shares')->with('success', 'Stock has been updated');
}