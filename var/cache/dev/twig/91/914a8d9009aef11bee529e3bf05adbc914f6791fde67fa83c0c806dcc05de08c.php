<?php

/* @ESFEspaceAbonne/back/langueTwo.html.twig */
class __TwigTemplate_9a344a8310f2c00abaaa709b5333794cd92071c457ffedac1a1a8cef0ded64d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "@ESFEspaceAbonne/back/langueTwo.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'Content' => array($this, 'block_Content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return ":backend:sidebar.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c07efe1df245c95da982bef90e46684c2043ab9246ad7dfc8ab71cb0e015974 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c07efe1df245c95da982bef90e46684c2043ab9246ad7dfc8ab71cb0e015974->enter($__internal_5c07efe1df245c95da982bef90e46684c2043ab9246ad7dfc8ab71cb0e015974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $__internal_a04ba3448df366b4f52f7ceef76dd57e3a8db1f6edf29c9309fe6336e8b4ae3b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a04ba3448df366b4f52f7ceef76dd57e3a8db1f6edf29c9309fe6336e8b4ae3b->enter($__internal_a04ba3448df366b4f52f7ceef76dd57e3a8db1f6edf29c9309fe6336e8b4ae3b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@ESFEspaceAbonne/back/langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c07efe1df245c95da982bef90e46684c2043ab9246ad7dfc8ab71cb0e015974->leave($__internal_5c07efe1df245c95da982bef90e46684c2043ab9246ad7dfc8ab71cb0e015974_prof);

        
        $__internal_a04ba3448df366b4f52f7ceef76dd57e3a8db1f6edf29c9309fe6336e8b4ae3b->leave($__internal_a04ba3448df366b4f52f7ceef76dd57e3a8db1f6edf29c9309fe6336e8b4ae3b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fa16b03c656649f04bcf52b8b232f1dbbcb8e12d2e1dff4a998b1c7a86bc066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fa16b03c656649f04bcf52b8b232f1dbbcb8e12d2e1dff4a998b1c7a86bc066->enter($__internal_7fa16b03c656649f04bcf52b8b232f1dbbcb8e12d2e1dff4a998b1c7a86bc066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3afb191000f7d13e60b6790d9abd5952e9afb9d1e356fee567a74f78267854fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3afb191000f7d13e60b6790d9abd5952e9afb9d1e356fee567a74f78267854fe->enter($__internal_3afb191000f7d13e60b6790d9abd5952e9afb9d1e356fee567a74f78267854fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3afb191000f7d13e60b6790d9abd5952e9afb9d1e356fee567a74f78267854fe->leave($__internal_3afb191000f7d13e60b6790d9abd5952e9afb9d1e356fee567a74f78267854fe_prof);

        
        $__internal_7fa16b03c656649f04bcf52b8b232f1dbbcb8e12d2e1dff4a998b1c7a86bc066->leave($__internal_7fa16b03c656649f04bcf52b8b232f1dbbcb8e12d2e1dff4a998b1c7a86bc066_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_3fead6733ec548292a4ec9b4c3cf8ae1f3ffff26d06dce8447b9b8f6617bb97b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3fead6733ec548292a4ec9b4c3cf8ae1f3ffff26d06dce8447b9b8f6617bb97b->enter($__internal_3fead6733ec548292a4ec9b4c3cf8ae1f3ffff26d06dce8447b9b8f6617bb97b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_4c9dae1fccb9b73882bd9b9b6280f4fceb780cef6d438001ab43ba2827b9d71a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c9dae1fccb9b73882bd9b9b6280f4fceb780cef6d438001ab43ba2827b9d71a->enter($__internal_4c9dae1fccb9b73882bd9b9b6280f4fceb780cef6d438001ab43ba2827b9d71a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        echo " 
    <div class=\"row\">
        <div class=\"col-md-12\">
            ";
        // line 10
        if (array_key_exists("document", $context)) {
            echo "        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        ";
            // line 21
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["document"] ?? $this->getContext($context, "document")));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 22
                echo "                            <tr>
                                <td>";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "pdfName", array()), "html", null, true);
                echo "</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"";
                // line 25
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl((("universites/pdf/" . $this->getAttribute($context["item"], "pdfName", array())) . ".pdf")), "html", null, true);
                echo "\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 29
            echo "                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"";
            // line 31
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_langueStepsThree");
            echo "\">Suivant</a>
            ";
        }
        // line 34
        echo "        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
";
        
        $__internal_4c9dae1fccb9b73882bd9b9b6280f4fceb780cef6d438001ab43ba2827b9d71a->leave($__internal_4c9dae1fccb9b73882bd9b9b6280f4fceb780cef6d438001ab43ba2827b9d71a_prof);

        
        $__internal_3fead6733ec548292a4ec9b4c3cf8ae1f3ffff26d06dce8447b9b8f6617bb97b->leave($__internal_3fead6733ec548292a4ec9b4c3cf8ae1f3ffff26d06dce8447b9b8f6617bb97b_prof);

    }

    public function getTemplateName()
    {
        return "@ESFEspaceAbonne/back/langueTwo.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 34,  120 => 32,  116 => 31,  112 => 29,  102 => 25,  97 => 23,  94 => 22,  90 => 21,  76 => 10,  63 => 7,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \":backend:sidebar.html.twig\" %}

{% block title %}
    Inscription Langue - {{ parent() }}
{% endblock %}

{% block Content %} 
    <div class=\"row\">
        <div class=\"col-md-12\">
            {% if document is defined %}        
                <h2>Etape 2</h2>
                <p>veuillez télécharger le(s) PDF ci-dessous et imprimer le PDF afin de nous le renvoyer remplit.</p>      
                <table id=\"documentInsciption\" class=\"table table-striped table-bordered nowrap\" cellspacing=\"0\" width=\"100%\">
                    <thead>
                        <tr>
                            <th>Nom du document</th>
                            <th>Lien de téléchargement</th>
                        </tr>
                    </thead>
                    <tbody>
                        {% for item in document %}
                            <tr>
                                <td>{{ item.pdfName }}</td>
                                <td>
                                    <a class=\"btn btn-primary view-pdf\" href=\"{{ asset('universites/pdf/' ~ item.pdfName ~ \".pdf\") }}\" target=\"_blank\">Télécharger</a>
                                </td>
                            </tr>
                        {% endfor %}
                    </tbody>
                </table>    
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_langueStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_langueStepsThree') }}\">Suivant</a>
            {% endif %}
        </div>
    </div>

    <script type=\"text/javascript\" class=\"init\">
        \$(document).ready(function() {
            var table = \$('#documentInsciption').DataTable( {
                paging: true,
                responsive: true,
                searching: false,
                \"lengthChange\": false
            } );
            new \$.fn.dataTable.FixedHeader( table );
        } );
    </script>
{% endblock %}

{#                OK mais moche                
<img src=\"{{ vich_uploader_asset(item, 'pdfFile') }}\" alt=\"{{ item.pdfName }}\" />
#}", "@ESFEspaceAbonne/back/langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle\\Resources\\views\\back\\langueTwo.html.twig");
    }
}
