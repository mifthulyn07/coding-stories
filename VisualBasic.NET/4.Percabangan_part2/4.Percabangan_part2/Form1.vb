Public Class Form1
    Public miftah As String, i As Integer

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        miftah = ". Miftahul Ulyana Hutabarat"
        For i = 1 To 10
            ListBox1.Items.Add("for Next: " & i & miftah)
        Next i
    End Sub

    Private Sub Button2_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button2.Click
        miftah = ". Miftahul Ulyana Hutabarat"
        i = 1
        Do While i <= 10
            ListBox1.Items.Add("Do While: " & i & miftah)
            i += 1
        Loop
    End Sub

    Private Sub Button3_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button3.Click
        miftah = ". Miftahul Ulyana Hutabarat"
        i = 1
        Do
            ListBox1.Items.Add("Do Until: " & i & miftah)
            i += 1
        Loop Until i > 10
    End Sub
End Class
