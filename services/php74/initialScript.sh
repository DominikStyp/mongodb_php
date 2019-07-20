#!/bin/bash
usage()
{
    echo "usage: docker-compose run phpunit [options] "
    echo "-c | --copy-vendor - script will ONLY copy vendor directory from container to your project"
    echo "                     which may be useful for your IDE to autocomplete PHPUnit classes etc."
    exit
}
copyVendor()
{
    echo "Copying files from container to your ./vendor";
    cp -R /tmp/vendor/* /tmp/vendor_mapped;
    exit;
}
while [ "$1" != "" ]; do
    case $1 in
        -c | --copy-vendor )    shift
                                copyVendor
                                ;;
        -h | --help )           usage
                                ;;
        * )                     usage
    esac
    shift
done

phpunit /app/tests