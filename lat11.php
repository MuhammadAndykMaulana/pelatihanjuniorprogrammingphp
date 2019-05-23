<?php
$input_string = 'Input = n';
sscanf($input_string, 'Input = %d', $n);
var_dump($n);

for(i=1; i<=n; i++)
    {
        for(j=i; j<=n; j++)
        {
            printf("*");
        }

        for(j=1; j<=(2*i-2); j++)
        {
            printf(" ");
        }

        for(j=i; j<=n; j++)
        {
            printf("*");
        }

        printf("\n");
    }

    // Loop to print lower half of the pattern
    for(i=1; i<=n; i++)
    {
        for(j=1; j<=i; j++)
        {
            printf("*");
        }

        for(j=(2*i-2); j<(2*n-2); j++)
        {
            printf(" ");
        }

        for(j=1; j<=i; j++)
        {
            printf("*");
        }

        printf("\n");
    }
