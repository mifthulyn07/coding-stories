Public Class Form2
    Dim S As String
    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        ms.ShowDialog()
        S = ms.FileName
        mp.URL = S
    End Sub
End Class