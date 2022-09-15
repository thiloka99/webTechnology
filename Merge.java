class MergeSort{
	int[] MergeSort(int array[]){
		int n = array.length;
		if(n <= 1){
			return array;
		}
		else{
			int L[] = MergeSort (array[(n/2)+1]);
	        int R[] = MergeSort (array[(n/2)+1+1]);

		}
		return Merge(L,R);
	}
	int[] Merge(int L[], int R[]){
		int n1 = L.length-2;
		int n2 = R.length-2;
		int m = n1 + n2;
		int S[] = new int[m];
		int i=0;
		int j=0;
		System.out.println();
		L[n1+1] = 10000;
		R[n2+1] = 10000;
		for(k=0; k<=m; k++){
			if(L[i] <= R[j]){
				S[k] = L[i];
				i++;
			}
			else if(L[i] > R[j]){
				S[k] = R[j];
				j++;
		    }
		    return S;
		}
	}
	void printArray(int array[]){
		int n = array.length;
        for (int i=0; i<=n; i++)
            System.out.print(array[i] + " ");
        System.out.println();
    }
 
	public static void main(String[] args){
		MergeSort ob = new MergeSort();
		int array[] = {2,6,4,1,9,8,5};
		
		System.out.println("Given Array :- ");
        ob.printArray(array);
		
	}
}