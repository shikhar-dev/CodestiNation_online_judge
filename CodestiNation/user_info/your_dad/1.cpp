#include <stdio.h>
#include <malloc.h>
#include <queue>
#include <vector>
#include <map>
#include <set>
#include <stack>
#include <math.h>
#include <string.h>
#include <time.h>
#include <iostream>
#include <algorithm>
#define ll long long int
#define ld double
#define cinf(a) scanf("%lf",&a)
#define coutf(a) printf("%lf\n",a)
#define cins(a) scanf("%s",a)
#define couts(a) printf("%s",a)
#define cin(a) scanf("%lld",&a)
#define cout(a) printf("%lld\n",a)
#define coutc(a) printf("%c",a)
#define cinc(a) scanf(" %c",&a)
#define debug couts("chu") ;
#define next_prm std::next_permutation
#define M 1000000007
#define MAX 9999999999999999
#define MIN -9999999999999999
#define pb(a) push_back(a)
#define mmp(a,b) make_pair (a,b)
#define pp pair
#define rev reverse
#define S second
#define F first
#define lb lower_bound
#define ub upper_bound
using namespace std ;
//*************************************************************************--UTILITIES--************************************************************************//
/*struct node2 {
	ll val ;
	ll x,y ;
}aux ;
struct compare {  
	bool operator()(node2 l, node2 r)  
    {  
       return l.val <= r.val ;  
    }  
}; 
std::priority_queue<node2,std::vector<node2>,compare > pq ;*/
//**************************************************************************************************************************************************************//
//********************************************************************-BY YOUR_DAD-*****************************************************************************//
//********************************************************************-PROGRAM STARTS FROM HERE-****************************************************************//
//**************************************************************************************************************************************************************//
ll w ;
int main () {
	ll t ;
	cin(t) ;
	while (t--) {
		cin(w) ;
		if (w==2)
			couts("NO\n") ;
		else
			couts((w%2==0)?"YES\n":"NO\n") ;
	}
	return 0 ;
}