<%@ Page Title="" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Student.aspx.cs" Inherits="WebApplicationUniversity.Student" %>
<asp:Content ID="Content1" ContentPlaceHolderID="MainContent" runat="server">
    <asp:GridView ID="GridViewStudent" runat="server">
   
</asp:GridView>
    <br />
<asp:TextBox ID="TextBoxID" runat="server"></asp:TextBox>
    <asp:Button ID="ButtonGetStudent" runat="server" Text="Get Student" OnClick="ButtonGetStudent_Click" />
    <br />
    <br />
    <asp:TextBox ID="TextBoxName" runat="server"></asp:TextBox>
     <asp:TextBox ID="TextBoxSurname" runat="server"></asp:TextBox>
    <br />
     <asp:TextBox ID="TextBoxSchool" runat="server"></asp:TextBox>
    <br />
    <asp:Label ID="LabelBirthdate" runat="server" Text="Birthdate"></asp:Label>
</asp:Content>
