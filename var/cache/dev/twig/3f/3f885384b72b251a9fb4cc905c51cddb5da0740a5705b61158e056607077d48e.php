<?php

/* ESFEspaceAbonneBundle:back:langueTwo.html.twig */
class __TwigTemplate_a8e78b8750eb014acf9e2180774ef3e6c1c47bb2ad89ae97289459f4ec80228d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:back:langueTwo.html.twig", 1);
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
        $__internal_6e3a8e65633d98f5125d2423fbce7057a505fbc27c904aa944af322c2ba13be5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e3a8e65633d98f5125d2423fbce7057a505fbc27c904aa944af322c2ba13be5->enter($__internal_6e3a8e65633d98f5125d2423fbce7057a505fbc27c904aa944af322c2ba13be5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $__internal_6202da75fa316672014f031a73f9b5038e87e0f1532f9155b53a16c6c621c044 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6202da75fa316672014f031a73f9b5038e87e0f1532f9155b53a16c6c621c044->enter($__internal_6202da75fa316672014f031a73f9b5038e87e0f1532f9155b53a16c6c621c044_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6e3a8e65633d98f5125d2423fbce7057a505fbc27c904aa944af322c2ba13be5->leave($__internal_6e3a8e65633d98f5125d2423fbce7057a505fbc27c904aa944af322c2ba13be5_prof);

        
        $__internal_6202da75fa316672014f031a73f9b5038e87e0f1532f9155b53a16c6c621c044->leave($__internal_6202da75fa316672014f031a73f9b5038e87e0f1532f9155b53a16c6c621c044_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7f75893d2aab839e7e0c927af6776d525b02ed469dc3a7d8ceb28e42b87d918d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7f75893d2aab839e7e0c927af6776d525b02ed469dc3a7d8ceb28e42b87d918d->enter($__internal_7f75893d2aab839e7e0c927af6776d525b02ed469dc3a7d8ceb28e42b87d918d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_a0a36add05ce0bb1c830d9d554f354ac2002fc2c57bee01d4140b15f618500ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0a36add05ce0bb1c830d9d554f354ac2002fc2c57bee01d4140b15f618500ed->enter($__internal_a0a36add05ce0bb1c830d9d554f354ac2002fc2c57bee01d4140b15f618500ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_a0a36add05ce0bb1c830d9d554f354ac2002fc2c57bee01d4140b15f618500ed->leave($__internal_a0a36add05ce0bb1c830d9d554f354ac2002fc2c57bee01d4140b15f618500ed_prof);

        
        $__internal_7f75893d2aab839e7e0c927af6776d525b02ed469dc3a7d8ceb28e42b87d918d->leave($__internal_7f75893d2aab839e7e0c927af6776d525b02ed469dc3a7d8ceb28e42b87d918d_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_caab76cc066968c731fd7de0cee7b44ba3ccaa507701f43bcd6e7fc96a83057c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caab76cc066968c731fd7de0cee7b44ba3ccaa507701f43bcd6e7fc96a83057c->enter($__internal_caab76cc066968c731fd7de0cee7b44ba3ccaa507701f43bcd6e7fc96a83057c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_6c0a4a135deeb989e7c473809091e60395db0bae8a4744f7bf240a129f19893f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c0a4a135deeb989e7c473809091e60395db0bae8a4744f7bf240a129f19893f->enter($__internal_6c0a4a135deeb989e7c473809091e60395db0bae8a4744f7bf240a129f19893f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_6c0a4a135deeb989e7c473809091e60395db0bae8a4744f7bf240a129f19893f->leave($__internal_6c0a4a135deeb989e7c473809091e60395db0bae8a4744f7bf240a129f19893f_prof);

        
        $__internal_caab76cc066968c731fd7de0cee7b44ba3ccaa507701f43bcd6e7fc96a83057c->leave($__internal_caab76cc066968c731fd7de0cee7b44ba3ccaa507701f43bcd6e7fc96a83057c_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:back:langueTwo.html.twig";
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
#}", "ESFEspaceAbonneBundle:back:langueTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/back/langueTwo.html.twig");
    }
}
