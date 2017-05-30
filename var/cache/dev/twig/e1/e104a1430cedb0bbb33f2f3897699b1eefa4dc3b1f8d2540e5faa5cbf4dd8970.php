<?php

/* ESFEspaceAbonneBundle:Back:preparationTwo.html.twig */
class __TwigTemplate_1743f5a50c93b06e90eeee28a2b37992eebc46bb100bc0c23471792eda80ba31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate(":backend:sidebar.html.twig", "ESFEspaceAbonneBundle:Back:preparationTwo.html.twig", 1);
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
        $__internal_b3d136be8e74ceb21e49c5ae216d6c4fa3b641350a51fcf3bf5f53e97c6df0d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3d136be8e74ceb21e49c5ae216d6c4fa3b641350a51fcf3bf5f53e97c6df0d1->enter($__internal_b3d136be8e74ceb21e49c5ae216d6c4fa3b641350a51fcf3bf5f53e97c6df0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:preparationTwo.html.twig"));

        $__internal_4743259b459605d940026d1020a4f80b3217c533817bc33d03eb3e9a485fa16a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4743259b459605d940026d1020a4f80b3217c533817bc33d03eb3e9a485fa16a->enter($__internal_4743259b459605d940026d1020a4f80b3217c533817bc33d03eb3e9a485fa16a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:Back:preparationTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3d136be8e74ceb21e49c5ae216d6c4fa3b641350a51fcf3bf5f53e97c6df0d1->leave($__internal_b3d136be8e74ceb21e49c5ae216d6c4fa3b641350a51fcf3bf5f53e97c6df0d1_prof);

        
        $__internal_4743259b459605d940026d1020a4f80b3217c533817bc33d03eb3e9a485fa16a->leave($__internal_4743259b459605d940026d1020a4f80b3217c533817bc33d03eb3e9a485fa16a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3c36d2870b7a103cb9b17afd5a094b0eb5d58069eaadfbba3ea6574523e34bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3c36d2870b7a103cb9b17afd5a094b0eb5d58069eaadfbba3ea6574523e34bd4->enter($__internal_3c36d2870b7a103cb9b17afd5a094b0eb5d58069eaadfbba3ea6574523e34bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_3848d35b90db54e569088568bfbccaba4d36f0d211353a8d6e9cef4fb9f75595 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3848d35b90db54e569088568bfbccaba4d36f0d211353a8d6e9cef4fb9f75595->enter($__internal_3848d35b90db54e569088568bfbccaba4d36f0d211353a8d6e9cef4fb9f75595_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Préparation - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_3848d35b90db54e569088568bfbccaba4d36f0d211353a8d6e9cef4fb9f75595->leave($__internal_3848d35b90db54e569088568bfbccaba4d36f0d211353a8d6e9cef4fb9f75595_prof);

        
        $__internal_3c36d2870b7a103cb9b17afd5a094b0eb5d58069eaadfbba3ea6574523e34bd4->leave($__internal_3c36d2870b7a103cb9b17afd5a094b0eb5d58069eaadfbba3ea6574523e34bd4_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_1eefcf7097645eab501d99c27eca99a0a8866b82126adbea5a614822157e5ebc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1eefcf7097645eab501d99c27eca99a0a8866b82126adbea5a614822157e5ebc->enter($__internal_1eefcf7097645eab501d99c27eca99a0a8866b82126adbea5a614822157e5ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_3b0e09018e1575e805882f4d83b7eddcc659dc2f5e30dcfb0164408c62c5ce5a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3b0e09018e1575e805882f4d83b7eddcc659dc2f5e30dcfb0164408c62c5ce5a->enter($__internal_3b0e09018e1575e805882f4d83b7eddcc659dc2f5e30dcfb0164408c62c5ce5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsOne");
            echo "\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"";
            // line 32
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("esf_espace_abonne_preparationStepsTwo");
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
        
        $__internal_3b0e09018e1575e805882f4d83b7eddcc659dc2f5e30dcfb0164408c62c5ce5a->leave($__internal_3b0e09018e1575e805882f4d83b7eddcc659dc2f5e30dcfb0164408c62c5ce5a_prof);

        
        $__internal_1eefcf7097645eab501d99c27eca99a0a8866b82126adbea5a614822157e5ebc->leave($__internal_1eefcf7097645eab501d99c27eca99a0a8866b82126adbea5a614822157e5ebc_prof);

    }

    public function getTemplateName()
    {
        return "ESFEspaceAbonneBundle:Back:preparationTwo.html.twig";
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
    Inscription Préparation - {{ parent() }}
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
                <a class=\"btn btn-danger\" href=\"{{ path('esf_espace_abonne_preparationStepsOne') }}\">Precedent</a>
                <a class=\"btn btn-primary\" href=\"{{ path('esf_espace_abonne_preparationStepsTwo') }}\">Suivant</a>
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
#}", "ESFEspaceAbonneBundle:Back:preparationTwo.html.twig", "C:\\wamp64\\www\\Projet\\Espace abonne\\esf\\src\\ESF\\EspaceAbonneBundle/Resources/views/Back/preparationTwo.html.twig");
    }
}
