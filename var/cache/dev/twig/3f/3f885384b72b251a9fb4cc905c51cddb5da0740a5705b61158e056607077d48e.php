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
        $__internal_64074b80f361a813b28f4e3145ed3d08b77c17c7bbddbefe4ca38a7ba1c2e5b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_64074b80f361a813b28f4e3145ed3d08b77c17c7bbddbefe4ca38a7ba1c2e5b3->enter($__internal_64074b80f361a813b28f4e3145ed3d08b77c17c7bbddbefe4ca38a7ba1c2e5b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $__internal_2883619f62c9aefc4a112d80ce5f6d706c2d153effef637aa886bb2984f29d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2883619f62c9aefc4a112d80ce5f6d706c2d153effef637aa886bb2984f29d10->enter($__internal_2883619f62c9aefc4a112d80ce5f6d706c2d153effef637aa886bb2984f29d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ESFEspaceAbonneBundle:back:langueTwo.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_64074b80f361a813b28f4e3145ed3d08b77c17c7bbddbefe4ca38a7ba1c2e5b3->leave($__internal_64074b80f361a813b28f4e3145ed3d08b77c17c7bbddbefe4ca38a7ba1c2e5b3_prof);

        
        $__internal_2883619f62c9aefc4a112d80ce5f6d706c2d153effef637aa886bb2984f29d10->leave($__internal_2883619f62c9aefc4a112d80ce5f6d706c2d153effef637aa886bb2984f29d10_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_127e44b07abc5e6f126b358905df27d977c710dfa28d575d869604da9c5f7402 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_127e44b07abc5e6f126b358905df27d977c710dfa28d575d869604da9c5f7402->enter($__internal_127e44b07abc5e6f126b358905df27d977c710dfa28d575d869604da9c5f7402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_ab39aad3ce20e3b9819fadc4f98a5e46076017be45523882d21b6547016546d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab39aad3ce20e3b9819fadc4f98a5e46076017be45523882d21b6547016546d7->enter($__internal_ab39aad3ce20e3b9819fadc4f98a5e46076017be45523882d21b6547016546d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "    Inscription Langue - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_ab39aad3ce20e3b9819fadc4f98a5e46076017be45523882d21b6547016546d7->leave($__internal_ab39aad3ce20e3b9819fadc4f98a5e46076017be45523882d21b6547016546d7_prof);

        
        $__internal_127e44b07abc5e6f126b358905df27d977c710dfa28d575d869604da9c5f7402->leave($__internal_127e44b07abc5e6f126b358905df27d977c710dfa28d575d869604da9c5f7402_prof);

    }

    // line 7
    public function block_Content($context, array $blocks = array())
    {
        $__internal_72240e2be89e6d48ffc779ef75c8b6e43ad67872f2d8fa2852d737b863ce5555 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72240e2be89e6d48ffc779ef75c8b6e43ad67872f2d8fa2852d737b863ce5555->enter($__internal_72240e2be89e6d48ffc779ef75c8b6e43ad67872f2d8fa2852d737b863ce5555_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

        $__internal_f1e00aa8cf647f671e61ae675f08d5f97e8c01f705f46f3d834c97d06db586d4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1e00aa8cf647f671e61ae675f08d5f97e8c01f705f46f3d834c97d06db586d4->enter($__internal_f1e00aa8cf647f671e61ae675f08d5f97e8c01f705f46f3d834c97d06db586d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "Content"));

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
        
        $__internal_f1e00aa8cf647f671e61ae675f08d5f97e8c01f705f46f3d834c97d06db586d4->leave($__internal_f1e00aa8cf647f671e61ae675f08d5f97e8c01f705f46f3d834c97d06db586d4_prof);

        
        $__internal_72240e2be89e6d48ffc779ef75c8b6e43ad67872f2d8fa2852d737b863ce5555->leave($__internal_72240e2be89e6d48ffc779ef75c8b6e43ad67872f2d8fa2852d737b863ce5555_prof);

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
