Static Cities

Names of Cities sometimes are splitted in different Table-Fields.
Example: 'xxx an der Weinstraße'
Here xxx is the citname, "an der" should be inserted in supplement_prefix and Weinstraße is the 
name_supplement.
Data aren't always verified so exactly and sometimes could be changed also to fulfill some special 
requirements.
But one important point is: each city / community has an uid that never should be changed and zip, 
phonecode and coordinates are given.
This is enough to use the table for address-Databases and for geo-information.

On important point:
Theoretical at least each zip with real addresses (postboxes excluded) should be available, but for
some districts it's still practice to note the district in the postaddress as city.
Those districts aren't in the Table and the corresponding community or city has to be chosen.

In germany districts and communities sometimes are changed, so the table has to be fetched in the
most actual version that is available.

Each community holds a link to wikipedia so that changes can be made by yourself.
BUT, please inform the author about new cities / communities, so that they get a unique id, that is 
guilty for all installations. So your addresses are always exchangeable, without need to export the
cities too.

zips are splittetd in the fields zip_range and zip_list. This solution is still quite bad but
I explain:
- zip_range holds ranges like 12345–67890
Some cities like hamburg or frankfurt have several ranges like: 12340–12349, 67890–67899
- zip_list holds lists like 12345,12346,12347 (which could be noted as range too)
Lists are searchable much easier I think and in future perhaps zips are outsourced in an own table.

one more field for zips: zip_division holds only the first two numbers of the zips of a city.
This ia redundent but is used by the post and makes tables sortable with one more parameter especially
because the zips are splittetd into two fields.

Some fields still are unused but data will be filled in later.